@extends('layouts.app')
<style>

    a{
        font-weight: bold;
    }
</style>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="{{asset('js/choosen.js')}}"></script>

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Please Choose your tarife</h1>
            <div class="tabs-container">
                <ul class="nav nav-tabs stats-tabs m-b-0" id="all-stats-list">

                    <li  class="active">
                        <a data-toggle="tab" href="#table-tab0" aria-expanded="false">Quatro</a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#table-tab1" aria-expanded="true"> Neo Max </a>
                    </li>

                    <li class="">
                        <a data-toggle="tab" href="#table-tab2" aria-expanded="false">Neo </a>
                    </li>

                    <li class=" ">
                        <a data-toggle="tab" href="#table-tab3">2Mix</a>
                    </li>
                    <li class=" ">
                        <a style="cursor: pointer" data-toggle="modal" data-target="#myModal">SPECIAL FOR YOU</a>
                    </li>

                </ul>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Generate tarif</h4>
                            </div>
                            <div class="modal-body">
                                <label for="typeOfCom">Please select which type of communication type</label>
                                <hr>
                                {{--<h5><b>Service Package</b><br>&nbsp;- Unlimited calls to Beeline mobile network of RA<br>&nbsp;- 150 SMS to all mobile networks of RA and NKR<br>&nbsp;- Mobile Internet<br>&nbsp;- Fixed Internet</h5>--}}
                                <select class="selectpicker" data-width="100%" multiple title="Choose one of the following...">
                                    <option>Unlimited calls to Beeline </option>
                                    <option>150 SMS to all mobile networks of RA and NKR</option>
                                    <option>Mobile Internet</option>
                                    <option> Modern TV</option>
                                </select>
                                <br>
                                <br>
                                <br>
                                <a target="_blank" href="https://static.beeline.am/upload/images/Documents/armentel/2017/Information_fix_2_2017_arm.pdf">
                                    Privacy Policy – Privacy & Terms
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" style="text-align: left">7 990 AMD/month</button>
                                <a href="/accaunt" type="button" id='showSpinner' class="btn btn-success" >Choose this</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-content">
                    <div id="table-tab0" class="tab-pane stats-tab-pane active">
                        <div class="panel-body">
                            <table class="table table-responsive chart-table">
                                <thead>

                                <tr>
                                    <th> <button class="btn">Quatro Basic - 8990</button>  </th>
                                    <th>
                                        <button class="btn">Quatro Best - 10990</button>
                                    </th>
                                    <th >
                                        <button class="btn">Quatro Max - 13990</button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>
                                        Անսահմանափակ զանգեր ցանցի ներսում
                                    </td>
                                    <td>
                                        Անսահմանափակ զանգեր ցանցի ներսում
                                        100 րոպե զանգեր այլ ցանցեր
                                    </td>
                                    <td>
                                         Անսահմանափակ զանգեր ցանցի ներսում
                                200 րոպե զանգեր այլ ցանցեր
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        100 sms
                                    </td>
                                    <td>
                                        200 sms
                                    </td>
                                    <td>
                                        200sms
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div id="table-tab1" class="tab-pane stats-tab-pane ">
                        <div class="panel-body">
                            <table class="table table-responsive chart-table">

                                <thead>
                                <tr>
                                    <th> Language</th>
                                    <th class="fixed-width text-right">
                                        Number of sessions
                                    </th>
                                    <!--<th class="fixed-width-small text-right " colspan="2">-->
                                    <th class="fixed-width-small text-right ">
                                        Percentage (%)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>
                                        English (Armenia)
                                    </td>
                                    <td class="text-right">
                                        28
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">28/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>40%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        English (Saudi Arabia)
                                    </td>
                                    <td class="text-right">
                                        26
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">26/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>37.1%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        English (Denmark)
                                    </td>
                                    <td class="text-right">
                                        16
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">16/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>22.9%</span>
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div id="table-tab2" class="tab-pane stats-tab-pane">
                        <div class="panel-body">
                            <table class="table table-responsive chart-table">

                                <thead>
                                <tr>
                                    <th> OS version</th>
                                    <th class="fixed-width text-right">
                                        Number of sessions
                                    </th>
                                    <!--<th class="fixed-width-small text-right " colspan="2">-->
                                    <th class="fixed-width-small text-right ">
                                        Percentage (%)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>
                                        10.3.3
                                    </td>
                                    <td class="text-right">
                                        70
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">70/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>100%</span>
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div id="table-tab3" class="tab-pane stats-tab-pane">
                        <div class="panel-body">
                            <table class="table table-responsive chart-table">

                                <thead>
                                <tr>
                                    <th> App version</th>
                                    <th class="fixed-width text-right">
                                        Number of sessions
                                    </th>
                                    <!--<th class="fixed-width-small text-right " colspan="2">-->
                                    <th class="fixed-width-small text-right ">
                                        Percentage (%)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>
                                        2.1 (2)
                                    </td>
                                    <td class="text-right">
                                        44
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">44/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>62.9%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2.1 (1)
                                    </td>
                                    <td class="text-right">
                                        16
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">16/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>22.9%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2.0 (1)
                                    </td>
                                    <td class="text-right">
                                        10
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">10/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>14.3%</span>
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div id="table-tab4" class="tab-pane stats-tab-pane">
                        <div class="panel-body">
                            <table class="table table-responsive chart-table">

                                <thead>
                                <tr>
                                    <th> Carrier</th>
                                    <th class="fixed-width text-right">
                                        Number of sessions
                                    </th>
                                    <!--<th class="fixed-width-small text-right " colspan="2">-->
                                    <th class="fixed-width-small text-right ">
                                        Percentage (%)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>
                                        Ucom (Armenia)
                                    </td>
                                    <td class="text-right">
                                        44
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">44/44</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>100%</span>
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div id="table-tab5" class="tab-pane stats-tab-pane">
                        <div class="panel-body">
                            <table class="table table-responsive chart-table">

                                <thead>
                                <tr>
                                    <th> Device model</th>
                                    <th class="fixed-width text-right">
                                        Number of sessions
                                    </th>
                                    <!--<th class="fixed-width-small text-right " colspan="2">-->
                                    <th class="fixed-width-small text-right ">
                                        Percentage (%)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>
                                        iPhone 6
                                    </td>
                                    <td class="text-right">
                                        44
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">44/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>62.9%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        iPhone 5
                                    </td>
                                    <td class="text-right">
                                        26
                                    </td>
                                    <!--<td class="fixed-width-small text-right">-->
                                    <!--<span class="pie">26/70</span>-->
                                    <!--</td>-->
                                    <td class="fixed-width-small text-right">
                                        <span>37.1%</span>
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script>

    </script>

@endsection

