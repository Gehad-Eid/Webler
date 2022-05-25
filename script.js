

// sorting in manager page 


function sort() {
	
	var  allTables ,table, rows, switching, i, x, y, shouldSwitch ;
	allTables = document.getElementsByClassName("tablesort");
	
	for(var j in allTables){
		switching = true;
		
		table=allTables[j];
		
		while (switching) {
			switching = false;
			rows = table.rows;
			
			for (i = 1; i < (rows.length -1); i++) {
				shouldSwitch = false;
				x = rows[i].getElementsByTagName("TD")[1];
				y = rows[i + 1].getElementsByTagName("TD")[1];
				
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()){
					shouldSwitch = true;
					break;
				}
			}
			
			if (shouldSwitch) {
				rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
				switching = true;
			}
		}
	}
}