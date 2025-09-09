const table = document.getElementById('myTable');

const addButton = document.createElement('button');
addButton.textContent = 'Adicionar Linha de Totais';
addButton.onclick = addTotalLine;

function addTotalLine() {
  // Prevent adding multiple total rows
  if (table.rows[table.rows.length - 1].cells[0]?.textContent === 'Total') return;

  const rows = table.rows;
  const cols = rows[2].cells.length;
  const totalRow = table.insertRow();

  for (let i = 0; i < cols; i++) {
    const cell = totalRow.insertCell(i);

    if (i === 0) {
      cell.textContent = 'Total';
    } else {
      let sum = 0;
      let count = 0;
      for (let j = 2; j < rows.length - 1; j++) {
        let val = rows[j].cells[i]?.textContent.trim();
        if (val) {
          val = val.replace(',', '.');
          const num = parseFloat(val);
          if (!isNaN(num)) {
            sum += num;
            count++;
          }
        }
      }
      cell.textContent = count > 0 ? (sum / count).toFixed(2) : '';
    }
  }
}

const addColButton = document.createElement('button');
addColButton.textContent = 'Adicionar Coluna de Médias';
addColButton.onclick = addTotalColumn;

function addTotalColumn() {
  const rows = table.rows;
  const headerRow1 = rows[0];
  const headerRow2 = rows[1];

  if (headerRow1.cells[headerRow1.cells.length - 1]?.textContent === 'Média') return;

  headerRow1.insertCell(headerRow1.cells.length).textContent = '';
  headerRow2.insertCell(headerRow2.cells.length).textContent = 'Média';

  for (let i = 2; i < rows.length; i++) {
    let sum = 0;
    let count = 0;
    const row = rows[i];
    for (let j = 1; j <= 9; j++) {
      let val = row.cells[j]?.textContent.trim();
      if (val) {
        val = val.replace(',', '.');
        const num = parseFloat(val);
        if (!isNaN(num)) {
          sum += num;
          count++;
        }
      }
    }
    const mediaCell = row.insertCell(row.cells.length);
    mediaCell.textContent = count > 0 ? (sum / count).toFixed(2) : '';
    mediaCell.classList.add('media-col');
  }
}

// Insert button before the table
table.parentNode.insertBefore(addButton, table);
table.parentNode.insertBefore(addColButton, table.nextSibling);