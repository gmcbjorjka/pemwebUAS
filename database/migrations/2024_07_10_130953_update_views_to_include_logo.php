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
        DB::statement("DROP VIEW IF EXISTS v_wp_hasil");
        DB::statement("DROP VIEW IF EXISTS v_wp_sum");
        DB::statement("DROP VIEW IF EXISTS v_wp_preferens");
        DB::statement("DROP VIEW IF EXISTS v_bobot");

        // Create view v_bobot
        DB::statement("
            CREATE VIEW v_bobot AS
            SELECT 
                user_id,
                w1 / (ABS(w1) + ABS(w2) + ABS(w3) + ABS(w4) + ABS(w5)) AS b1,
                w2 / (ABS(w1) + ABS(w2) + ABS(w3) + ABS(w4) + ABS(w5)) AS b2,
                w3 / (ABS(w1) + ABS(w2) + ABS(w3) + ABS(w4) + ABS(w5)) AS b3,
                w4 / (ABS(w1) + ABS(w2) + ABS(w3) + ABS(w4) + ABS(w5)) AS b4,
                w5 / (ABS(w1) + ABS(w2) + ABS(w3) + ABS(w4) + ABS(w5)) AS b5
            FROM bobot
        ");

        // Create view v_wp_preferens
        DB::statement("
            CREATE VIEW v_wp_preferens AS
            SELECT 
                a.nama_saham,
                a.logo, -- Include logo column
                b.user_id,
                POWER(a.c1, b.b1) AS S1,
                POWER(a.c2, b.b2) AS S2,
                POWER(a.c3, b.b3) AS S3,
                POWER(a.c4, b.b4) AS S4,
                POWER(a.c5, b.b5) AS S5,
                POWER(a.c1, b.b1) * POWER(a.c2, b.b2) * POWER(a.c3, b.b3) * POWER(a.c4, b.b4) * POWER(a.c5, b.b5) AS S
            FROM alternatif a
            CROSS JOIN v_bobot b
        ");

        // Create view v_wp_sum
        DB::statement("
            CREATE VIEW v_wp_sum AS
            SELECT user_id, SUM(S) AS jml
            FROM v_wp_preferens
            GROUP BY user_id
        ");

        // Create view v_wp_hasil
        DB::statement("
            CREATE VIEW v_wp_hasil AS
            SELECT 
                p.nama_saham,
                p.logo, -- Include logo column
                p.user_id,
                p.S / s.jml AS hasil
            FROM v_wp_preferens p
            JOIN v_wp_sum s ON p.user_id = s.user_id
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop views
        DB::statement("DROP VIEW IF EXISTS v_wp_hasil");
        DB::statement("DROP VIEW IF EXISTS v_wp_sum");
        DB::statement("DROP VIEW IF EXISTS v_wp_preferens");
        DB::statement("DROP VIEW IF EXISTS v_bobot");
    }
};
