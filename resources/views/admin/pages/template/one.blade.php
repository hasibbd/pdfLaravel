@extends('admin.app.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-body  mx-5">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <table class="custom-table">
                                    <tr>
                                        <td class="text-center"><img style="width: 85%" src="{{asset('template/images/logo.png')}}" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold pt-2 text-center">
                                            ZMLUVA O REZERVÁCII  NEHNUTEĽNOSTÍ A POSKYTOVANÍ SLUŽIEB <br>
                                            SLUŽIEB SÚVISIACICH S PREDAJOM A KÚPOU NEHNUTEĽNOSTÍ – DOM - BYT - POZEMOK

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            (Ďalej len "Zmluva") uzatvorená medzi zmluvnými stranami  podľa § 51 Občianskeho zákonníka:
                                            <br>
                                            ALL INCLUSIVE REAL, s.r.o., so sídlom Ul. Biskupa Kondého 5138/30, 929 01 Dunajská Streda, IČO:
                                            <br>
                                            54140099, DIČ: 2121574059 zapísaná v obchodnom registri Okresného súdu v Trnave, v oddieli  Sro,
                                            <br>
                                            zastúpená na základe generálnej plnej moci Viktor Hodosi

                                        </td>
                                    </tr>
                                </table>
                                <table class="custom-table">
                                    <tr>
                                        <td colspan="4" class="text-right pr-5">
                                            (ďalej len ako „Sprostredkovateľ“ na jednej  strane )
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center">a</td>
                                    </tr>
                                    <tr>
                                        <td class="w-25 text-left">
                                            Meno a priezvisko  <br>
                                            Trvale bytom <br>
                                            Obec, PSČ <br>
                                            Dátum narodenia <br>
                                            rodné číslo <br>
                                        </td>
                                        <td colspan="3" class=w-75>
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25">

                                        </td>
                                        <td class="text-right">
                                            <br>
                                            <br>
                                            (ďalej  len ako „Záujemca“ tým sa má na mysli aj budúci kupujúci na druhej  strane )
                                            <br>
                                            (spoločne ďalej len ako „Zmluvné strany“)

                                        </td>
                                    </tr>
                                </table>
                                <hr style="border: 3px solid #000000;">
                                <table class="custom-table">
                                    <tr>
                                        <td colspan="4" class="text-center">a</td>
                                    </tr>
                                    <tr>
                                        <td class="w-25 text-left">
                                            Meno a priezvisko  <br>
                                            Trvale bytom <br>
                                            Obec, PSČ <br>
                                            Dátum narodenia <br>
                                            rodné číslo <br>
                                        </td>
                                        <td >
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                        </td>

                                        <td class="text-left">
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                            <input type="text"> <br>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25">

                                        </td>
                                        <td colspan="3" class="text-right">
                                            <br>
                                            <br>
                                            (ďalej  len ako „Budúci Predávajúci“ na tretej strane ) <br>
                                            (spoločne ďalej len ako „Zmluvné strany“)

                                        </td>
                                    </tr>
                                </table>
                                <br><br><br>
                                Zmluvné strany sa v súvislosti s činnosťou sprostredkovateľa pri sprostredkovaní predaja a kúpy dole uvedených nehnuteľností ako predmetu kúpy uzatvárajú túto zmluvu:
                                <hr style="border: 3px solid #000000; margin-top: 0px; !important;">
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
