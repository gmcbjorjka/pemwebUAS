<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Drop existing views if they exist
        DB::statement("DROP VIEW IF EXISTS v_saw_min_max");
        DB::statement("DROP VIEW IF EXISTS v_saw_normal");
        DB::statement("DROP VIEW IF EXISTS v_saw_hasil");

        // Create view v_saw_min_max
        DB::statement("
            CREATE VIEW v_saw_min_max AS
            SELECT 
                MIN(c1) AS mi1, MAX(c1) AS ma1,
                MIN(c2) AS mi2, MAX(c2) AS ma2,
                MIN(c3) AS mi3, MAX(c3) AS ma3,
                MIN(c4) AS mi4, MAX(c4) AS ma4,
                MIN(c5) AS mi5, MAX(c5) AS ma5
            FROM alternatif
        ");

        // Create view v_saw_normal
        DB::statement("
            CREATE VIEW v_saw_normal AS
            SELECT 
                a.nama_saham,
                a.logo, -- Include logo column
                b.user_id,
                a.c1 / m.ma1 AS r1,
                a.c2 / m.ma2 AS r2,
                a.c3 / m.ma3 AS r3,
                a.c4 / m.ma4 AS r4,
                a.c5 / m.ma5 AS r5
            FROM alternatif a
            CROSS JOIN v_saw_min_max m
            CROSS JOIN v_bobot b
        ");

        // Create view v_saw_hasil
        DB::statement("
            CREATE VIEW v_saw_hasil AS
            SELECT 
                n.nama_saham,
                n.logo, -- Include logo column
                n.user_id,
                (ABS(b.b1) * n.r1 + ABS(b.b2) * n.r2 + ABS(b.b3) * n.r3 + ABS(b.b4) * n.r4 + ABS(b.b5) * n.r5) AS hasil
            FROM v_saw_normal n
            JOIN v_bobot b ON n.user_id = b.user_id
            ORDER BY n.user_id, hasil DESC
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop views
        DB::statement("DROP VIEW IF EXISTS v_saw_hasil");
        DB::statement("DROP VIEW IF EXISTS v_saw_normal");
        DB::statement("DROP VIEW IF EXISTS v_saw_min_max");
    }
};
