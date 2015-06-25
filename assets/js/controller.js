
var helloApp = angular.module("helloApp", []);
helloApp.controller("CompanyCtrl", function($scope) {
$scope.companies = [];

$scope.addRow = function(){

	if(! $scope.name){ 
		alert("Data tidak boleh kosong");
	} else{
	
	 var nourut=0;
            var duplikat=false;
            $scope.companies.forEach(function(companies) {
               var defdata= JSON.stringify($scope.companies[nourut].name).replace('"', '');
				defdata= defdata.replace('"', '');
               //alert( $scope.name+ '/ ' + defdata);
               if($scope.name==defdata){
                    alert( $scope.name+ ' Sudah Ada Pada List ');duplikat=true;
               }
                nourut=nourut+1;
            });

            if(duplikat==false){
			
		$scope.companies.push({ 'name':$scope.name, 'employees': $scope.employees, 'headoffice':$scope.headoffice });
		$scope.name='';
		$scope.employees='';
		$scope.headoffice='';
		}
	}
};

$scope.removeRow = function(name){				
		var index = -1;		
		var comArr = eval( $scope.companies );
		for( var i = 0; i < comArr.length; i++ ) {
			if( comArr[i].name === name ) {
				index = i;
				break;
			}
		}
		if( index === -1 ) {
			alert( "Something gone wrong" );
		}
		$scope.companies.splice( index, 1 );		
	};
});


