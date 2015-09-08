@extends('layouts.master')
@section('content')
        <div class="logo_div">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Logo_Google_2013_Official.svg/1280px-Logo_Google_2013_Official.svg.png" class="logo" />
        </div>

        <div class="search_form_container">
            <div class="get_help">
                Get Help
            </div>
            <div class="search_form">
                <form method="GET" id="search_form">
                    <span><input type="text" name="keyword" class="form_input-keyword" /></span>
                    <span class="search_button_span"><input type="submit" class="button button-blue" value="Search Neighbor" /></span>
                </form>
            </div>
            <div class="quick_search">
                Quick Search Options (Category):
            </div>

            <div class="quick_search_optionlist">
                <div><ul>
                    <li>Education</li>
                    <li>Household</li>
                </ul></div>
                <div><ul>
                    <li>Renovation</li>
                    <li>Electrical</li>
                </ul></div>
                <div><ul>
                    <li>House Keeping</li>
                    <li>Share car</li>
                </ul></div>
            </div>
        </div>

@stop



