<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My custom Bulma website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.7.95/css/materialdesignicons.min.css">
    <!-- dependencies (jquery, handlebars and bootstrap) -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- jQuery -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Handlebars -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/handlebars/handlebars.min.js"></script>

    <!-- Alpaca -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/alpaca/bootstrap/alpaca.js"></script>
    <link type="text/css" href="http://www.alpacajs.org/lib/alpaca/bootstrap/alpaca.css" rel="stylesheet"/>

    <!-- jQuery UI Support -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/jquery-ui/jquery-ui.js"></script>
    <link type="text/css" href="http://www.alpacajs.org/lib/jquery-ui/themes/cupertino/jquery-ui.min.css" rel="stylesheet"/>

    <!-- Required for jQuery UI DateTimePicker control -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.js"></script>
    <link type="text/css" href="http://www.alpacajs.org/lib/jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.css" rel="stylesheet"/>

    <!-- Required for Text Field masking -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/jquery-maskedinput/dist/jquery.maskedinput.min.js"></script>

    <!-- Required for the Editor field (sample code viewing) -->
    <script src="http://www.alpacajs.org/lib/ace-builds/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

    <!-- Beautify (used by EditorField) -->
    <script src="http://www.alpacajs.org/lib/js-beautify/js/lib/beautify.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://www.alpacajs.org/lib/js-beautify/js/lib/beautify-css.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://www.alpacajs.org/lib/js-beautify/js/lib/beautify-html.js" type="text/javascript" charset="utf-8"></script>

    <!-- typeahead.js -->
    <script src="http://www.alpacajs.org/lib/typeahead.js/dist/bloodhound.min.js" type="text/javascript"></script>
    <script src="http://www.alpacajs.org/lib/typeahead.js/dist/typeahead.bundle.min.js" type="text/javascript"></script>

    <!-- datatables (for TableField) -->
    <script src="http://www.alpacajs.org/lib/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="http://www.alpacajs.org/lib/datatables.net-bs/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="http://www.alpacajs.org/lib/datatables.net-rowreorder/js/dataTables.rowReorder.js" type="text/javascript"></script>
    <link type="text/css" href="http://www.alpacajs.org/lib/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet"/>

    <!-- ckeditor (for the ckeditor field) -->
    <script src="http://www.alpacajs.org/lib/ckeditor/ckeditor.js" type="text/javascript"></script>

    <!-- tinymce (for the tinymce field) -->
    <script src="http://www.alpacajs.org/lib/tinymce/tinymce.js" type="text/javascript"></script>

    <!-- fileupload control (for UploadField) -->
    <link rel="stylesheet" type="text/css" href="http://www.alpacajs.org/lib/blueimp-file-upload/css/jquery.fileupload.css"/>
    <link rel="stylesheet" type="text/css" href="http://www.alpacajs.org/lib/blueimp-file-upload/css/jquery.fileupload-ui.css"/>
    <script src="http://www.alpacajs.org/lib/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="http://www.alpacajs.org/lib/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="http://www.alpacajs.org/lib/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="http://www.alpacajs.org/lib/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
    <script src="http://www.alpacajs.org/lib/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>

    <!-- handsontable (for GridField) -->
    <script src="http://www.alpacajs.org/lib/handsontable/dist/jquery.handsontable.full.js"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/handsontable/dist/jquery.handsontable.full.css"/>

    <!-- bootstrap datetimepicker for date, time and datetime controls -->
    <script src="http://www.alpacajs.org/lib/moment/min/moment-with-locales.min.js"></script>
    <script src="http://www.alpacajs.org/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"/>

    <!-- bootstrap-multiselect for time field -->
    <script src="http://www.alpacajs.org/lib/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/bootstrap-multiselect/css/bootstrap-multiselect.css"/>

    <!-- jQuery Price Format for currency field -->
    <script type="text/javascript" src="http://www.alpacajs.org/lib/jquery-price-format2/jquery.price_format.min.js"></script>

    <!-- Spectrum plugin for Color picker -->
    <script src="http://www.alpacajs.org/lib/spectrum/spectrum.js"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/spectrum/spectrum.css"/>

    <!-- Color Picker for Bootstrap -->
    <script src="http://www.alpacajs.org/lib/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css"/>

    <!-- Pick-A-Color for Bootstrap -->
    <script src="http://www.alpacajs.org/lib/tinycolor/dist/tinycolor-min.js"></script>
    <script src="http://www.alpacajs.org/lib/pick-a-color-m/build/1.2.3/js/pick-a-color-1.2.3.min.js"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/pick-a-color-m/build/1.2.3/css/pick-a-color-1.2.3.min.css"/>

    <!-- bootstrap-tokenfield (for token field) -->
    <script src="http://www.alpacajs.org/lib/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js" type="text/javascript"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.css"/>

    <!-- summernote editor -->
    <script src="http://www.alpacajs.org/lib/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/summernote/dist/summernote.css"/>

    <!-- markdown (for the markdown field) -->
    <script src="http://www.alpacajs.org/lib/simplemde/dist/simplemde.min.js" type="text/javascript"></script>
    <link rel="stylesheet" media="screen" href="http://www.alpacajs.org/lib/simplemde/dist/simplemde.min.css"/>

  </head>
  <body>
      <div class="container" style="padding:30px 0">
        <div id="field1"> </div>
      </div>

      <script>
$("#field1").alpaca({
    "data": ["test1", "test2", "test3"],
    "schema": {
        "type": "array",
    },
    "view": {
      "parent": "bootstrap-edit-horizontal",
    },
    "options": {
        "toolbarSticky": true,
        "dragAndDrop": true,
        "type": "array",
        "actionbarStyle":"right",
        "label":"Champs"
    }
});
    </script>
    <style>
        .alpaca-array-actionbar button:nth-child(3n),
        .alpaca-array-actionbar button:nth-child(4n) {
            display: none;
        }
    </style>
  </body>
</html>