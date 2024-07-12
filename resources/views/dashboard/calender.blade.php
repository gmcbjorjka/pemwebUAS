@extends('layouts.master')
@section('content')
{{-- message --}}

<div class="page-wrapper">
  <div class="content container-fluid">



    <div class="row">
      <div class="col-12 col-lg-12 col-xl-8">
        <div class="row">
          <div class="col-12 col-lg-8 col-xl-8 d-flex">
            <div class="card flex-fill comman-shadow">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-6">
                    <h5 class="card-title">Upcoming Lesson</h5>
                  </div>
                  <div class="col-6">
                    <span class="float-end view-link"><a href="#">View All
                        Courses</a></span>
                  </div>
                </div>
              </div>
              <div class="pt-3 pb-3">
                <div class="table-responsive lesson">
                  <table class="table table-center">
                    <tbody>
                      <tr>
                        <td>
                          <div class="date">
                            <b>The FED</b>
                            <p>3.1 Ipsuum dolor</p>
                            <ul class="teacher-date-list">
                              <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                2022</li>
                              <li>|</li>
                              <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                am</li>
                            </ul>
                          </div>
                        </td>
                        <td>
                          <div class="lesson-confirm">
                            <a href="#">Confirmed</a>
                          </div>
                          <button type="submit" class="btn btn-info">Reschedule</button>
                        </td>
                      </tr>


                      <tr>
                        <td>
                          <div class="date">
                            <b>THE FED</b>
                            <p>3.1 Ipsuum dolor</p>
                            <ul class="teacher-date-list">
                              <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                2022</li>
                              <li>|</li>
                              <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                am</li>
                            </ul>
                          </div>
                        </td>
                        <td>
                          <div class="lesson-confirm">
                            <a href="#">Confirmed</a>
                          </div>
                          <button type="submit" class="btn btn-info">Reschedule</button>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <div class="date">
                            <b>THE FED</b>
                            <p>3.1 Ipsuum dolor</p>
                            <ul class="teacher-date-list">
                              <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                2022</li>
                              <li>|</li>
                              <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                am</li>
                            </ul>
                          </div>
                        </td>
                        <td>
                          <div class="lesson-confirm">
                            <a href="#">Confirmed</a>
                          </div>
                          <button type="submit" class="btn btn-info">Reschedule</button>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <div class="date">
                            <b>THE FED</b>
                            <p>3.1 Ipsuum dolor</p>
                            <ul class="teacher-date-list">
                              <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                2022</li>
                              <li>|</li>
                              <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                am</li>
                            </ul>
                          </div>
                        </td>
                        <td>
                          <div class="lesson-confirm">
                            <a href="#">Confirmed</a>
                          </div>
                          <button type="submit" class="btn btn-info">Reschedule</button>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <div class="date">
                            <b>THE FED</b>
                            <p>3.1 Ipsuum dolor</p>
                            <ul class="teacher-date-list">
                              <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                2022</li>
                              <li>|</li>
                              <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                am</li>
                            </ul>
                          </div>
                        </td>
                        <td>
                          <div class="lesson-confirm">
                            <a href="#">Confirmed</a>
                          </div>
                          <button type="submit" class="btn btn-info">Reschedule</button>
                        </td>
                      </tr>



                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-xl-4 d-flex">
            <div class="card flex-fill comman-shadow">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-12">
                    <h5 class="card-title">Profit</h5>
                  </div>
                </div>
              </div>
              <div class="dash-widget">
                <div class="circle-bar circle-bar1">
                  <div class="circle-graph1" data-percent="70">
                    <div class="progress-less">
                      <b>55/60</b>
                      <p>profit development</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-12 col-lg-12 col-xl-4 d-flex">
        <div class="card flex-fill comman-shadow">
          <div class="card-body">
            <div id="calendar-doctor" class="calendar-container"></div>
            <div class="calendar-info calendar-info1">
              <div class="up-come-header">
                <h2>Upcoming Events</h2>
                <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
              </div>
              <div class="upcome-event-date">
                <h3>10 Jan</h3>
                <span><i class="fas fa-ellipsis-h"></i></span>
              </div>
              <div class="calendar-details">
                <p>08:00 am</p>
                <div class="calendar-box normal-bg">
                  <div class="calandar-event-name">
                    <h4>The FED</h4>
                    <h5>Lorem ipsum sit amet</h5>
                  </div>
                  <span>08:00 - 09:00 am</span>
                </div>
              </div>
              <div class="calendar-details">
                <p>09:00 am</p>
                <div class="calendar-box normal-bg">
                  <div class="calandar-event-name">
                    <h4>The FED</h4>
                    <h5>Lorem ipsum sit amet</h5>
                  </div>
                  <span>09:00 - 10:00 am</span>
                </div>
              </div>
              <div class="calendar-details">
                <p>10:00 am</p>
                <div class="calendar-box normal-bg">
                  <div class="calandar-event-name">
                    <h4>The FED</h4>
                    <h5>Lorem ipsum sit amet</h5>
                  </div>
                  <span>10:00 - 11:00 am</span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection