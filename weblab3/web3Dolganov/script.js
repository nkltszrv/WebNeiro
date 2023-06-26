let tableId = 0;
let countOfRows = 0;
function delete_row() {
			event.preventDefault();
			const form = document.getElementById('figure');
			number = figure.value;
			number = Number(number);
			var elem = document.getElementById(number);
			elem.parentNode.removeChild(elem);
			i = number;
			while (i < a - 1) {
				$row = document.getElementById(i + 1);
				$row.setAttribute('id', i);
				$newtext = document.getElementById(i + 1 + 'nick');
				$newtext.textContent = i;
				$newtext.setAttribute('id', i + 'nick');
				i = i + 1;
			}
			a = a - 1;
			if (a == 1) {
				document.getElementById('create').disabled = false;
				document.getElementById('add').disabled = true;
				document.getElementById('remove').disabled = true;
				$table.parentNode.removeChild($table);
				countOfRows = 0;
			}


			document.querySelector('.results').innerHTML = a;
		}

function create_row() {
	k = k + 1;
	$table = document.getElementById('my-table');
	$newrow = document.createElement('tr');
	$cell1 = document.createElement('td');
	$cell1.setAttribute('id', a + 'nick');
	$cell2 = document.createElement('td');
	$cell3 = document.createElement('td');

	$newtext1 = document.createElement('p');
	$newtext1.textContent = a;
	$newtext2 = document.createElement('p');
	$newtext2.textContent = 'Строка таблицы';
	$newtext3 = document.createElement('p');
	$newtext3.textContent = "Порядок создания строки: " + k;

	a = a + 1;
	document.querySelector('.results').innerHTML = a-1;

	$table.appendChild($newrow);
	$newrow.appendChild($cell1);
	$newrow.appendChild($cell2);
	$newrow.appendChild($cell3);
	$cell1.appendChild($newtext1);
	$cell2.appendChild($newtext2);
	$cell3.appendChild($newtext3);

	$cell1.style.border = "2px solid black";
	$cell2.style.border = "2px solid black";
	$cell3.style.border = "2px solid black";

	$newrow.setAttribute('id', a - 1);
}

let a = 1;

function create_table() {
      if (countOfRows == 0){

	        k = 1;
	        $table = document.createElement('table');
	        $table.setAttribute('id', 'my-table');
	        $row = document.createElement('tr');
	        $cell1 = document.createElement('td');
	        $cell1.setAttribute('id', a + 'nick');
	        $cell2 = document.createElement('td');
	        $cell3 = document.createElement('td');

	        const $colors = document.querySelector('#colors');
	        $colors.appendChild($table);

	        $newtext1 = document.createElement('p');
	        $newtext1.textContent = a;
	        $newtext2 = document.createElement('p');
	        $newtext2.textContent = 'Строка таблицы';
	        $newtext3 = document.createElement('p');
	        $newtext3.textContent = "Порядок создания строки: " + '1';

	        $table.appendChild($row);
	        $row.appendChild($cell1);
	        $row.appendChild($cell2);
	        $row.appendChild($cell3);
	        $cell1.appendChild($newtext1);
	        $cell2.appendChild($newtext2);
	        $cell3.appendChild($newtext3);

	        $cell1.style.border = "2px solid black";
	        $cell2.style.border = "2px solid black";
	        $cell3.style.border = "2px solid black";
	        a = a + 1;
	        $row.setAttribute('id', a - 1);
	        document.querySelector('.results').innerHTML = a-1;
	        document.getElementById('create').disabled = false;
	        document.getElementById('add').disabled = false;
	        document.getElementById('remove').disabled = false;
	        countOfRows = 1;
	   }
	   else{
	        alert('Таблица уже создана');
	   }

}