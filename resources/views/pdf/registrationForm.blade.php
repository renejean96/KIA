<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Student Registration Form<title>
    
    <!-- {{ URL::asset('css/bootstrap.min.css') }} -->
    <!-- <link rel = "stylesheet" type = "text/css" href="{{ asset('/.jpg') }}"> -->
    <!-- <link rel = "stylesheet" type = "text/css" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}"> -->
</head>

<body>
<style type="text/stylesheet">
    /* main color: #007943 */
    body{
        font-family: 'segoe ui', sans-serif;
        padding-left: 6%;
        padding-right: 6%;
        color: #455052;
    }
    .top-img {
        margin-left: 45%;
    }
    .text-center {
        text-align: center;
        color: #007943;
        /* font-family: calibri; */
    }
    .small-subtitle {
        color: grey;
        text-align: center;
        margin-top: -1.5%;
        font-size: 9pt;
    }
    .doc-header-subtitle {
        text-align: center;
        margin-top: -3%;
        border-bottom: 2px solid #455052;
        font-size: 10.5pt;
    }
    .doc-body h5 {
        font-size: 9pt;
    }
    .doc-body {
        font-size: 10pt;   
    }
    .doc-body table {
        width: 60%;
    }
    table .mid-content td{
        padding-top: 0.1%;
        padding-bottom: 1.5%;
    }

</style>
    <div class="document">
        <div class="doc-header-top">
            <!-- <img src="{{ asset('/images/kia_logo.jpg') }}" class = "top-img" alt=""> -->
            <img src="/storage/app/public/images/kia_logo.jpg" alt="">
            <h5 class = "text-center">KIGALI INFANTS ACADEMY</h5>
            <h6 class ="small-subtitle">Success begins here</h6>
        </div>
        <div class="doc-header-subtitle">
            <h5 class="">P.O.BOX. 4205 KIGALI TEL: (+250) 788 423 165/788 411 979/788 721 684</h5>         
            <!-- <button class="btn btn-primary">BTN</button> -->
        </div>
        <div class="doc-body">

            <table>
                <tr>
                    <td><h5 class = "mid-title">1. DATE OF REGISTRATION:</h5></td>
                </tr>
                <tr>
                    <td>Class:</td>        
                </tr>
                <tr>
                    <td><h5 class = "mid-title">2. PUPIL'S DETAILS</h5></td>
                </tr>
                
                @foreach($info as $i)
                    <tr class="mid-content">
                        <td>Last name: {{ $i->lastName }}</td>
                        <td>First name: {{ $i->firstName }}</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Nationality: {{ $i->nationality }}</td>
                        <td>Date of Birth: {{ $i->dob }}</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Sex:  {{ $i->sex }}</td>
                        <td>School Facilications:</td>
                    </tr>
                @endforeach

                <tr>
                    <td><h5 class = "mid-title">3. PUPIL'S PLACE OF BIRTH</h5></td>
                </tr>                

                @foreach($address as $add)
                    <tr class="mid-content">
                        <td>Country: {{ $add->country }}</td> 
                        <td>Province: {{ $add->province }}</td>
                    </tr>
                    <tr class="mid-content">
                        <td>District:  {{ $add->district }}</td>
                        <td>Sector: {{ $add->sector }}</h5</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Cell:  {{ $add->cell }}</td>
                        <td>Village: {{ $add->village }}</td>         
                    </tr>
                @endforeach
                <tr>
                    <td><h5 class = "mid-title">4. FATHER DETAILS</h5></td>
                </tr>

                @foreach($father as $f)
                    <tr class="mid-content">
                        <td>Names: {{ $f->names }}</td> 
                        <td>ID Number: {{ $f->idn }}</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Phone:  {{ $f->phone }}</td>
                        <td>Occupation: {{ $f->occupation }}</h5</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Email:  {{ $f->email }}</td>
                    </tr>                
                @endforeach

                <tr>
                    <td><h5 class = "mid-title">5. MOTHER DETAILS</h5></td>
                </tr>

                @foreach($mother as $m)
                    <tr class="mid-content">
                        <td>Names: {{ $m->names }}</td> 
                        <td>ID Number: {{ $m->idn }}</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Phone:  {{ $m->phone }}</td>
                        <td>Occupation: {{ $m->occupation }}</h5</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Email:  {{ $m->email }}</td>
                    </tr>                
                @endforeach
                
                <tr>
                    <td><h5 class = "mid-title">6. GUARDIAN DETAILS</h5></td>
                </tr>
                
                @foreach($guardian as $g)
                    <tr class="mid-content">
                        <td>Names: {{ $g->names }}</td> 
                        <td>ID Number: {{ $g->idn }}</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Phone:  {{ $g->phone }}</td>
                        <td>Occupation: {{ $g->occupation }}</h5</td>
                    </tr>
                    <tr class="mid-content">
                        <td>Email:  {{ $g->email }}</td>
                    </tr>                
                @endforeach

            </table>

            <h5>PLEASE REVIEW: The information provided above is true to the best of my understanding.</h5>
            <h5>Parent's names: </h5>
            <h5>Signature:</h5>                             

        </div>
    </div>
</body>
</html>
