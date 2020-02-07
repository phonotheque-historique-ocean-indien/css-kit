<!DOCTYPE html >
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

    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
  </head>
  <body>
      <div class="container" style="padding:30px 0">
            <form action="upload.php" class="dropzone" id="my-dropzone">
                
  <div class="dz-message needsclick">
    Déposer un fichier ou cliquer pour Parcourir les fichiers sur votre ordinateur.<br />
    <span class="note needsclick"></span>
  </div>
            </form>

            <span class="context-menu-one btn btn-neutral">right click me</span>

      </div>
<script>
Dropzone.options.myDropzone = {
    addRemoveLinks: true, 
    dictRemoveFile : "×", 
    init: function() {
        thisDropzone = this;
        $.getJSON('upload.php', function(data) {
          $.each(data, function(index, val) {
            var mockFile = { name: val.name, size: val.size };
            thisDropzone.options.addedfile.call(thisDropzone, mockFile);
            thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/" + val.name);
            thisDropzone.emit("complete", mockFile);
          });
        });

        this.on("removedfile", function(file) {
            alert("Suppression de "+file.name);
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: { 'name': file.name}
            });
        });
    }
};
$(document).ready(function() {
        $(function() {
        $.contextMenu({
            selector: '.context-menu-one', 
            callback: function(key, options) {
                var m = "clicked: " + key;
                window.console && console.log(m) || alert(m); 
            },
            items: {
                "edit": {name: "Edit", icon: "edit"},
                "cut": {name: "Cut", icon: "cut"},
               copy: {name: "Copy", icon: "copy"},
                "paste": {name: "Paste", icon: "paste"},
                "delete": {name: "Delete", icon: "delete"},
                "sep1": "---------",
                "quit": {name: "Quit", icon: function(){
                    return 'context-menu-icon context-menu-icon-quit';
                }}
            }
        });

        $('.context-menu-one').on('click', function(e){
            console.log('clicked', this);
        })    
    });
});
</script>
    <style>
        .alpaca-array-actionbar button:nth-child(3n),
        .alpaca-array-actionbar button:nth-child(4n) {
            display: none;
        }
        .dz-remove {
            display:inline-block !important;
            width:30px;
            height:30px;
            
            position:absolute;
            top:5px;
            right:5px;
            z-index:1000;
            
            font-size:22px !important;
            line-height:22px;
           
            text-align:center;
            font-weight:bold;
            border:1px solid white !important;
            border-radius:15px;
            color:white;
            background-color:red;
            opacity:.5;
        }

        .dz-remove:hover {
            text-decoration:none !important;
            color:white !important;
            opacity:1;
        }

        @charset "UTF-8";
/*!
 * jQuery contextMenu - Plugin for simple contextMenu handling
 *
 * Version: v2.7.1
 *
 * Authors: Björn Brala (SWIS.nl), Rodney Rehm, Addy Osmani (patches for FF)
 * Web: http://swisnl.github.io/jQuery-contextMenu/
 *
 * Copyright (c) 2011-2018 SWIS BV and contributors
 *
 * Licensed under
 *   MIT License http://www.opensource.org/licenses/mit-license
 *
 * Date: 2018-11-29T10:56:47.812Z
 */
@-webkit-keyframes cm-spin {
  0% {
    -webkit-transform: translateY(-50%) rotate(0deg);
            transform: translateY(-50%) rotate(0deg);
  }
  100% {
    -webkit-transform: translateY(-50%) rotate(359deg);
            transform: translateY(-50%) rotate(359deg);
  }
}
@-o-keyframes cm-spin {
  0% {
    -webkit-transform: translateY(-50%) rotate(0deg);
         -o-transform: translateY(-50%) rotate(0deg);
            transform: translateY(-50%) rotate(0deg);
  }
  100% {
    -webkit-transform: translateY(-50%) rotate(359deg);
         -o-transform: translateY(-50%) rotate(359deg);
            transform: translateY(-50%) rotate(359deg);
  }
}
@keyframes cm-spin {
  0% {
    -webkit-transform: translateY(-50%) rotate(0deg);
         -o-transform: translateY(-50%) rotate(0deg);
            transform: translateY(-50%) rotate(0deg);
  }
  100% {
    -webkit-transform: translateY(-50%) rotate(359deg);
         -o-transform: translateY(-50%) rotate(359deg);
            transform: translateY(-50%) rotate(359deg);
  }
}

@font-face {
  font-family: "context-menu-icons";
  font-style: normal; 
  font-weight: normal;

  src: url("font/context-menu-icons.eot?2gb3e");
  src: url("font/context-menu-icons.eot?2gb3e#iefix") format("embedded-opentype"), url("font/context-menu-icons.woff2?2gb3e") format("woff2"), url("font/context-menu-icons.woff?2gb3e") format("woff"), url("font/context-menu-icons.ttf?2gb3e") format("truetype");
}

.context-menu-icon-add:before {
  content: "\EA01";
}

.context-menu-icon-copy:before {
  content: "\EA02";
}

.context-menu-icon-cut:before {
  content: "\EA03";
}

.context-menu-icon-delete:before {
  content: "\EA04";
}

.context-menu-icon-edit:before {
  content: "\EA05";
}

.context-menu-icon-loading:before {
  content: "\EA06";
}

.context-menu-icon-paste:before {
  content: "\EA07";
}

.context-menu-icon-quit:before {
  content: "\EA08";
}

.context-menu-icon::before {
  position: absolute;
  top: 50%;
  left: 0;
  width: 2em; 
  font-family: "context-menu-icons";
  font-size: 1em;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  color: #2980b9;
  text-align: center;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
       -o-transform: translateY(-50%);
          transform: translateY(-50%);

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.context-menu-icon.context-menu-hover:before {
  color: #fff;
}

.context-menu-icon.context-menu-disabled::before {
  color: #bbb;
}

.context-menu-icon.context-menu-icon-loading:before {
  -webkit-animation: cm-spin 2s infinite;
       -o-animation: cm-spin 2s infinite;
          animation: cm-spin 2s infinite;
}

.context-menu-icon.context-menu-icon--fa {
  display: list-item;
  font-family: inherit;
  line-height: inherit;
}
.context-menu-icon.context-menu-icon--fa::before {
  position: absolute;
  top: 50%;
  left: 0;
  width: 2em; 
  font-family: FontAwesome;
  font-size: 1em;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  color: #2980b9;
  text-align: center;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
       -o-transform: translateY(-50%);
          transform: translateY(-50%);

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.context-menu-icon.context-menu-icon--fa.context-menu-hover:before {
  color: #fff;
}
.context-menu-icon.context-menu-icon--fa.context-menu-disabled::before {
  color: #bbb;
}

.context-menu-icon.context-menu-icon--fa5 {
  display: list-item;
  font-family: inherit;
  line-height: inherit;
}
.context-menu-icon.context-menu-icon--fa5 i, .context-menu-icon.context-menu-icon--fa5 svg {
  position: absolute;
  top: .3em; 
  left: .5em;
  color: #2980b9;
}
.context-menu-icon.context-menu-icon--fa5.context-menu-hover > i, .context-menu-icon.context-menu-icon--fa5.context-menu-hover > svg {
  color: #fff;
}
.context-menu-icon.context-menu-icon--fa5.context-menu-disabled i, .context-menu-icon.context-menu-icon--fa5.context-menu-disabled svg {
  color: #bbb;
}

.context-menu-list {
  position: absolute; 
  display: inline-block;
  min-width: 13em;
  max-width: 26em;
  padding: .25em 0;
  margin: .3em;
  font-family: inherit;
  font-size: inherit;
  list-style-type: none;
  background: #fff;
  border: 1px solid #bebebe;
  border-radius: .2em;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .5);
          box-shadow: 0 2px 5px rgba(0, 0, 0, .5);
}

.context-menu-item {
  position: relative;
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
  padding: .2em 2em;
  color: #2f2f2f;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none; 
  background-color: #fff;
}

.context-menu-separator {
  padding: 0; 
  margin: .35em 0;
  border-bottom: 1px solid #e6e6e6;
}

.context-menu-item > label > input,
.context-menu-item > label > textarea {
  -webkit-user-select: text;
     -moz-user-select: text;
      -ms-user-select: text;
          user-select: text;
}

.context-menu-item.context-menu-hover {
  color: #fff;
  cursor: pointer; 
  background-color: #2980b9;
}

.context-menu-item.context-menu-disabled {
  color: #bbb;
  cursor: default; 
  background-color: #fff;
}

.context-menu-input.context-menu-hover {
  color: #2f2f2f; 
  cursor: default;
}

.context-menu-submenu:after {
  position: absolute;
  top: 50%;
  right: .5em;
  z-index: 1; 
  width: 0;
  height: 0;
  content: '';
  border-color: transparent transparent transparent #2f2f2f;
  border-style: solid;
  border-width: .25em 0 .25em .25em;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
       -o-transform: translateY(-50%);
          transform: translateY(-50%);
}

/**
 * Inputs
 */
.context-menu-item.context-menu-input {
  padding: .3em .6em;
}

/* vertically align inside labels */
.context-menu-input > label > * {
  vertical-align: top;
}

/* position checkboxes and radios as icons */
.context-menu-input > label > input[type="checkbox"],
.context-menu-input > label > input[type="radio"] {
  position: relative;
  top: .12em; 
  margin-right: .4em;
}

.context-menu-input > label {
  margin: 0;
}

.context-menu-input > label,
.context-menu-input > label > input[type="text"],
.context-menu-input > label > textarea,
.context-menu-input > label > select {
  display: block;
  width: 100%; 
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

.context-menu-input > label > textarea {
  height: 7em;
}

.context-menu-item > .context-menu-list {
  top: .3em; 
  /* re-positioned by js */
  right: -.3em;
  display: none;
}

.context-menu-item.context-menu-visible > .context-menu-list {
  display: block;
}

.context-menu-accesskey {
  text-decoration: underline;
}
    </style>
  </body>
</html>