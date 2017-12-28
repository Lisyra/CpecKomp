<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
<title>СпецКомп</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>-->
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
 
             <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<title>СпецКомп</title>
</head>
<style>
    table {
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 14px;
    background: white;
    width: 100%;
    border-collapse: collapse;
    text-align: center;
    margin: 0 auto 20px;
    color: #DADfDF;
    

}
tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
th:first-child, .td:first-child {
    border-left: 15px solid white;
}

th {
    font-weight: normal;
    font-size: 14px;
    border-bottom: 2px solid #DADfDF;
    border-right: 30px solid #fff;
    border-left: 30px solid #fff;
    color: #000000;
    padding: 8px 2px;
     text-align: center;
}

select {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	background: #eae7e7 url(icon_0.png) no-repeat;
	border: 1px solid #c8c8c8;
	color: #777;
	font: 13px Helvetica, Arial, sans-serif;
	margin: 0 0 10px;
	padding: 15px 10px 15px 40px;
	width: 80%;
}
select:focus {
	-webkit-box-shadow: 0 0 2px #ed1c24 inset;
	-moz-box-shadow: 0 0 2px #ed1c24 inset;
	-ms-box-shadow: 0 0 2px #ed1c24 inset;
	-o-box-shadow: 0 0 2px #ed1c24 inset;
	box-shadow: 0 0 2px #ed1c24 inset;
	background-color: #fff;
	border: 1px solid #ed1c24;
	outline: none;
}
label{color: #dadadf;
 font-size: 20px}
</style>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
       <br>
        <br
                <br>
<div class="form-group">
                                    <label class="mm-link mm-link-big" for="inputType">Тип программы: </label>
                                    <br>
                                        <br>
                                            <br>
                                    <select class="mm-link" id="inputType" name="type"  required="" onchange="javascript:selectProg();" v-model="selectedType">
                                        <option hidden></option>
                                        <option value="Antivirus"> Антивирус</option>;
                                        <option value="Support"> Support </option>;

                                         </select>
                                </div>
    <br>
        <br
                <br> 
                    <a href="main"><input  value="На главную" type="button"></a>
                    <br>
        <br
                <br>
<div name="selectDataProgram" ></div>
<script type="text/javascript">
    function selectProg(){
        var id_prog = $('select[name="type"]').val();
        if(!id_prog){
                $('div[name="selectDataProgram"]').html('');
        }else{
                $.ajax({
                        type: "POST",
                        url: "http://localhost/pocketing/ajax.base.php",
                        data: { action: 'showProgramForInsert', name: id_prog },
                        cache: false,
                        success: function(responce){ $('div[name="selectDataProgram"]').html(responce); }
                });
        };
};
 </script>
