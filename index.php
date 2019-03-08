<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Selection des serveurs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.13.4/dist/bootstrap-table.min.css">
  <link rel="stylesheet" type="text/css" href="js/extensions/filter-control/bootstrap-table-filter-control.css">
</head>
<body>

<div class="container">
    <table id="table"
    data-toggle="table"

    data-search="true"
    data-filter-control="true"
    data-filter-show-clear="true"

    data-show-export="true"
    data-click-to-select="true"

    data-pagination="true"
    data-page-size="5"
    data-page-list="[5,10,20,50,100,200,1000]"
    data-pagination-pre-text="précédent"
    data-pagination-next-text="Suivant"

    data-toolbar="#toolbar">
    <thead>
      <tr>
        <th data-field="state" data-checkbox="true">Export</th>
        <th data-field="IP" data-filter-control="input" data-sortable="true">IP</th>
        <th data-field="NomServeur" data-filter-control="input" data-sortable="true">Nom Serveur</th>
        <th data-field="Application" data-filter-control="input" data-sortable="true">Application</th>
        <th data-field="Obsolete" data-filter-control="input" data-sortable="true">Obsolete</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>10.235.20.1</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>10.235.20.51</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>10.235.20.514</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>10.235.20.81</td>
          <td>10.235.20.62</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>10.235.20.741</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>10.235.20.771</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>10.235.20.551</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>16.278.20.1</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>16.278.20.581</td>
          <td>16.278.20.692</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>16.278.20.8851</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>16.278.20.321</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>16.278.20.741</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
        <tr>
          <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox" value=""> </td>
          <td>16.278.20.581</td>
          <td>exemple 2</td>
          <td>exemple 3</td>
          <td>exemple 4</td>
        </tr>
    </tbody>
  </table>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS, and then Bootstrap Table JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.6.2/core.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.13.4/dist/bootstrap-table.min.js"></script>
<script src="js/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
<script src="js/extensions/export/bootstrap-table-export.js"></script>
<script type="text/javascript" src="js/tableExport/libs/FileSaver/FileSaver.min.js"></script>
<script type="text/javascript" src="js/tableExport/libs/js-xlsx/xlsx.core.min.js"></script>
<script type="text/javascript" src="js/tableExport/libs/jsPDF/jspdf.min.js"></script>
<script type="text/javascript" src="js/tableExport/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
<script type="text/javascript" src="js/tableExport/libs/es6-promise/es6-promise.auto.min.js"></script>
<script type="text/javascript" src="js/tableExport/libs/html2canvas/html2canvas.min.js"></script>
<script type="text/javascript" src="js/tableExport/tableExport.min.js"></script>

</script>
</body>
</html>
