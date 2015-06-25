<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html ng-app="helloApp">
<head>
<title>Hello AngularJS - Add Table Row Dynamically</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>
<script src="//lightswitch05.github.io/table-to-json/javascripts/jquery.tabletojson.min.js"></script>
<script src="assets/js/controller.js"></script>
</head>
<!-- Controller name goes here -->
<body ng-controller="CompanyCtrl">
<br/>

<script>
$(document).ready(function(){
	$('#tessa').click(function() {
		var table = $('#coba').tableToJSON();
//			tables = {"myrows": table};//make myrows the parent object
			hs = JSON.stringify(table);  
			
		var form = document.createElement("form");
		form.setAttribute("method", "POST");
		form.setAttribute("action", "http://localhost/angular/get.php");

		var hiddenField = document.createElement("input");
		hiddenField.setAttribute("type", "hidden");
		hiddenField.setAttribute("name", "tes");
		hiddenField.setAttribute("value", hs);

		form.appendChild(hiddenField);
		document.body.appendChild(form);
		form.submit();
	});
	
});

/*
function tes(table){


var myTableArray = [];

$("table#tes tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});

//alert(JSON.stringify(myTableArray));
 var hsls = JSON.stringify(myTableArray);
 
var form = document.createElement("form");
form.setAttribute("method", "POST");
form.setAttribute("action", "http://localhost/angular/get.php");

var hiddenField = document.createElement("input");
hiddenField.setAttribute("type", "hidden");
hiddenField.setAttribute("name", "tes");
hiddenField.setAttribute("value", hsls);

form.appendChild(hiddenField);
document.body.appendChild(form);
form.submit();


alert(hsls);

}


*/
</script>

<input type="button" value="Tes" class="btn btn-primary" id="tessa" />
<input type="text" value="" class="btn btn-primary" id="isi"/>

<table class="table" id="coba">
	<tr>
		<th>Name</th>
		<th>Employees</th>
		<th>Head Office</th>
		<th> </th>
	</tr>
	
	<tr ng-repeat="company in companies">
		<td>{{company.name}}</td>
		<td>{{company.employees}}</td>
		<td>{{company.headoffice}}</td>
		<td><input type="button" value="Remove" class="btn btn-primary" ng-click="removeRow(company.name)"/></td>
	</tr>
</table>		

			
<form class="form-horizontal" role="form" ng-submit="addRow()">
	<div class="form-group">
		<label class="col-md-2 control-label">Name</label>
		<div class="col-md-4">
			<input type="text" class="form-control" name="name" ng-model="name" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Employees</label>
		<div class="col-md-4">
			<input type="text" class="form-control" name="employees" ng-model="employees" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Headoffice</label>
		<div class="col-md-4">
			<input type="text" class="form-control" name="headoffice" ng-model="headoffice" />
		</div>
	</div>
	<div class="form-group">								
		<div style="padding-left:110px">
			<input type="submit" value="Submit" class="btn btn-primary"/>
		</div>
	</div>
</form>
		
		
</body>
</html>
		
		
<!-- 		http://jsfiddle.net/nyg4z/27/ -->