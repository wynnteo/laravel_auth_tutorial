@extends('layouts.master')

@section('title')
    Dashboard | Admin Panel
@endsection

@section('content')
<div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
          <ul class="quick-links ml-auto">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Watchlist</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="page-header-toolbar">
        <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
          <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
          <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
        </div>
        <div class="filter-wrapper">
          <div class="dropdown toolbar-item">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
            <div class="dropdown-menu" aria-labelledby="dropdownsorting">
              <a class="dropdown-item" href="#">Last Day</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
          <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
        </div>
        <div class="sort-wrapper">
          <button type="button" class="btn btn-primary toolbar-item">New</button>
          <div class="dropdown ml-lg-auto ml-3 toolbar-item">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
            <div class="dropdown-menu" aria-labelledby="dropdownexport">
              <a class="dropdown-item" href="#">Export as PDF</a>
              <a class="dropdown-item" href="#">Export as DOCX</a>
              <a class="dropdown-item" href="#">Export as CDR</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">32,451</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Visits</h5>
                                <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">15,236</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Impressions</h5>
                                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">7,688</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Conversation</h5>
                                <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">1,553</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Downloads</h5>
                                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">Recent Events</h4>
                <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                </div>
                <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Other Events</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                </div>
                <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Quarterly Report</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                </div>
                <div class="d-flex pt-2">
                    <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                </div>
                <a class="d-block mt-5" href="#">Show all</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between pb-3">
                    <h4 class="card-title mb-0">Activities</h4>
                    <p class="mb-0 text-muted">20 finished, 5 remaining</p>
                </div>
                <ul class="timeline">
                    <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                    </li>
                </ul>
                <a class="d-block mt-3" href="#">Show all</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">People Also Watch</h4>
                <div class="table-responsive">
                    <table class="table table-stretched">
                        <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Last Price</th>
                                <th>Change</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="mb-1 text-dark font-weight-medium">NFLX</p><small class="font-weight-medium">Netflix, Inc.</small>
                                </td>
                                <td class="font-weight-medium">$250.00</td>
                                <td class="text-success font-weight-medium">+12.64</td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-1 text-dark font-weight-medium">TSLA</p><small class="font-weight-medium">Tesla, Inc.</small>
                                </td>
                                <td class="font-weight-medium">$458.00</td>
                                <td class="text-danger font-weight-medium">-14.53</td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-1 text-dark font-weight-medium">GOOG</p><small class="font-weight-medium">Alphabet, Inc.</small>
                                </td>
                                <td class="font-weight-medium">$250.00</td>
                                <td class="text-danger font-weight-medium">+12.64</td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-1 text-dark font-weight-medium">AMZN</p><small class="font-weight-medium">Amazon.com, Inc.</small>
                                </td>
                                <td class="font-weight-medium">$546.00</td>
                                <td class="text-success font-weight-medium">+24.34</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a class="d-block mt-3" href="#">Show all</a>
            </div>
        </div>
    </div>
</div>
@endsection