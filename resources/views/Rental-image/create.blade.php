@extends('layoutUser.layout')
@section('titleweb','Rental upload')
    
@section('bodycode')
<script src="https://cdn02.jotfor.ms/js/vendor/imageinfo.js?v=3.3.26452" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/file-uploader/fileuploader.js?v=3.3.26452"></script>
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.26452" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"field":"23","visibility":"Hide"}],"index":"0","link":"Any","priority":"0","terms":[{"field":"24","operator":"equals","value":"Same as above"}],"type":"field"},{"action":[{"field":"34","visibility":"Hide"}],"index":"1","link":"Any","priority":"1","terms":[{"field":"26","operator":"isFilled","value":false}],"type":"field"}]);
	JotForm.init(function(){
	/*INIT-START*/
	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.highlightInputs = false;
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"anhXe47","qid":"47","text":"Anh xe","type":"control_head"},null,null,null,null,{"name":"input52","qid":"52","text":"Anh ben trai\n ","type":"control_text"},null,null,{"name":"input55","qid":"55","text":"Anh chinh giữa\n \n ","type":"control_text"},{"name":"ltpgtltstronggtanhBampecircn","qid":"56","text":"Anh ben phai\n ","type":"control_text"},{"name":"ltpgtltstronggtanhBampecircn57","qid":"57","text":"Anh dằng sau\n ","type":"control_text"},null,{"description":"","name":"input59","qid":"59","subLabel":"","text":"","type":"control_fileupload"},null,null,null,{"description":"","name":"pleaseVerify","qid":"63","text":"Please verify that you are human","type":"control_captcha"},null,null,{"description":"","name":"input66","qid":"66","subLabel":"","text":"","type":"control_fileupload"},{"description":"","name":"input67","qid":"67","subLabel":"","text":"","type":"control_fileupload"},{"description":"","name":"input68","qid":"68","subLabel":"","text":"","type":"control_fileupload"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"anhXe47","qid":"47","text":"Anh xe","type":"control_head"},null,null,null,null,{"name":"input52","qid":"52","text":"Anh ben trai\n ","type":"control_text"},null,null,{"name":"input55","qid":"55","text":"Anh chinh giữa\n \n ","type":"control_text"},{"name":"ltpgtltstronggtanhBampecircn","qid":"56","text":"Anh ben phai\n ","type":"control_text"},{"name":"ltpgtltstronggtanhBampecircn57","qid":"57","text":"Anh dằng sau\n ","type":"control_text"},null,{"description":"","name":"input59","qid":"59","subLabel":"","text":"","type":"control_fileupload"},null,null,null,{"description":"","name":"pleaseVerify","qid":"63","text":"Please verify that you are human","type":"control_captcha"},null,null,{"description":"","name":"input66","qid":"66","subLabel":"","text":"","type":"control_fileupload"},{"description":"","name":"input67","qid":"67","subLabel":"","text":"","type":"control_fileupload"},{"description":"","name":"input68","qid":"68","subLabel":"","text":"","type":"control_fileupload"}]);}, 20); 
</script>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.26452" rel="stylesheet" type="text/css" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.26452" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5f6c4c83346ec05354558fe8"/>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.26452" />
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:8px;
        padding-bottom:8px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        margin-top: 20px;
        margin-right: auto;
        margin-left: auto;
        width:750px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Lucida Grande, sans-serif;
    }
    .form-header-group {
      font-family: Lucida Grande, sans-serif;
    }
    .form-label {
      font-family: Lucida Grande, sans-serif;
    }
  
    
  
    .form-line {
      margin-top: 8px;
      margin-bottom: 8px;
    }
  
    .form-all {
      max-width: 630px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
    }
  
    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      color: #555;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
  
    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/.form-textbox {
width: 285px;
}
#input_11, #input_22, #input_33.form-textbox {
width: 115px;
}
#label_24, #label_26.form-label-top {
font-size: 16px;
font-weight: bolder;
}
.form-textarea {
width: 595px;
}
#label_36.form-label-top {
font-weight: bolder;}
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
    div img { max-width: 100%; }
</style>


  <div role="main" class="form-all" style="margin-top: 5%">
    <ul class="form-section page-section">
      <li id="cid_47" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_47" class="form-header" data-component="header">
              Ảnh xe <h5>(Phải đủ 4 hình)</h5>
            </h2>
            <div id="subHeader_47" class="form-subHeader">
              Đăng nhiều hình ở các góc độ khác nhau để tăng thông tin cho xe của bạn.
            </div>
          </div>
        </div>
      </li>

      @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors as $item)
                  <li>{{ $item }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      <form name="myform" class="jotform-form" action="{{ route('rental.checkUpload') }}" method="post" enctype="multipart/form-data" onsubmit="return validation()">
        @csrf
        <input type="hidden" name="car_id" value="{{ $data }}">
      <li class="form-line" data-type="control_text" id="id_55">
        <div id="cid_55" class="form-input-wide">
          <div id="text_55" class="form-html" data-component="text">
            <h6><strong><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Ảnh 1</span></strong></h6>
            <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">
              <span style="font-size: 14pt;">
                 
              </span>
            </div>
            <div class="ddict_btn" style="top: 18px; left: 125.65px;">
               
            </div>
          </div>
        </div>
      </li>
      
      <li class="form-line" data-type="control_fileupload" id="id_59">
        <label class="form-label form-label-top form-label-auto" id="label_59" for="input_59">  </label>
        <div id="cid_59" class="form-input-wide">
          <div data-wrapper-react="true">
            <div data-wrapper-react="true">
              <div class="qq-uploader-buttonText-value">
                Browse Files
              </div>
              
              <input type="file" id="files" name="image"/>
              <img id="image" style="widows: 500px"/>
            </div>
            <span style="display:none" class="cancelText">
              Cancel
            </span>
            <span style="display:none" class="ofText">
              of
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_52">
        <div id="cid_52" class="form-input-wide">
          <div id="text_52" class="form-html" data-component="text">
            <h6><strong>Ảnh 2</strong></h6>
            <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">
               
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_66">
        <label class="form-label form-label-top form-label-auto" id="label_66" for="input_66">  </label>
        <div id="cid_66" class="form-input-wide">
          <div data-wrapper-react="true">
            <div data-wrapper-react="true">
              <div class="qq-uploader-buttonText-value">
                Browse Files
              </div>
              <input type="file" id="files1" name="image_left" />
              <img id="image1" />
            </div>
            <span style="display:none" class="cancelText">
              Cancel
            </span>
            <span style="display:none" class="ofText">
              of
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_56">
        <div id="cid_56" class="form-input-wide">
          <div id="text_56" class="form-html" data-component="text">
            <h6><strong>Ảnh 3</strong></h6>
            <div class="ddict_btn" style="top: 28px; left: 94.8px;">
               
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_67">
        <label class="form-label form-label-top form-label-auto" id="label_67" for="input_67">  </label>
        <div id="cid_67" class="form-input-wide">
          <div data-wrapper-react="true">
            <div data-wrapper-react="true">
              <div class="qq-uploader-buttonText-value">
                Browse Files
              </div>
              <input type="file" id="files2" name="image_right" />
              <img id="image2" />
            </div>
            <span style="display:none" class="cancelText">
              Cancel
            </span>
            <span style="display:none" class="ofText">
              of
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_57">
        <div id="cid_57" class="form-input-wide">
          <div id="text_57" class="form-html" data-component="text">
            <h6><strong>Ảnh 4</strong></h6>
            <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">
               
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_68">
        <label class="form-label form-label-top form-label-auto" id="label_68" for="input_68">  </label>
        <div id="cid_68" class="form-input-wide">
          <div data-wrapper-react="true">
            <div data-wrapper-react="true">
              <div class="qq-uploader-buttonText-value">
                Browse Files
              </div>
              <input type="file" id="files3" name="image_behind" />
              <img id="image3" />
            </div>
            <span style="display:none" class="cancelText">
              Cancel
            </span>
            <span style="display:none" class="ofText">
              of
            </span>
          </div>
        </div>
      </li>

      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          {{-- <button id="input_2" type="submit"  class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
            Quay lại
          </button> --}}
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Đăng ký
            </button>
          </div>
        </div>
      </li>

</form>
<script>
  var div = document.getElementById("form-input-wide");
var width = div.style.height;
yourImg.style.width = width;
</script>
<script>
  var img = document.forms['myform']['image'];
  var img1 = document.forms['myform']['image_left'];
  var img2 = document.forms['myform']['image_right'];
  var img3 = document.forms['myform']['image_behind'];
  
  var validExt = ["jpeg", "png", "jpg"];

  function validation()
  {
      if(img.value != '')
      {
          var img_ext=img.value.substring(img.value.lastIndexOf('.')+1);

          var result = validExt.includes(img_ext);

          if(result == false)
          {
              alert('File ảnh 1 bạn chọn không phải là file hình!');
              return false;
          }
          else
          {
              if(parseFloat(img.files[0].size/(1024*1024))>=3)
              {
                  alert('File có kích thước tối đa là 3MB. File hiện tại: ' + parseFloat(img.files[0].size/(1024*1024)) );
                  return false;
              }
          }

      }else{
          alert('Bạn chưa chọn ảnh 1');
          return false;
      }
      // return true;
      if(img1.value != '')
      {
          var img1_ext=img1.value.substring(img1.value.lastIndexOf('.')+1);

          var result = validExt.includes(img1_ext);

          if(result == false)
          {
              alert('File ảnh 2 bạn chọn không phải là file hình!');
              return false;
          }
          else
          {
              if(parseFloat(img1.files[0].size/(1024*1024))>=3)
              {
                  alert('File có kích thước tối đa là 3MB. File hiện tại: ' + parseFloat(img1.files[0].size/(1024*1024)) );
                  return false;
              }
          }

      }else{
          alert('Bạn chưa chọn ảnh 2');
          return false;
      }

      if(img2.value != '')
      {
          var img2_ext=img2.value.substring(img2.value.lastIndexOf('.')+1);

          var result = validExt.includes(img2_ext);

          if(result == false)
          {
              alert('File ảnh 3 bạn chọn không phải là file hình!');
              return false;
          }
          else
          {
              if(parseFloat(img2.files[0].size/(1024*1024))>=3)
              {
                  alert('File có kích thước tối đa là 3MB. File hiện tại: ' + parseFloat(img2.files[0].size/(1024*1024)) );
                  return false;
              }
          }

      }else{
          alert('Bạn chưa chọn ảnh 3');
          return false;
      }

      if(img3.value != '')
      {
          var img3_ext=img3.value.substring(img3.value.lastIndexOf('.')+1);

          var result = validExt.includes(img3_ext);

          if(result == false)
          {
              alert('File ảnh 4 bạn chọn không phải là file hình!');
              return false;
          }
          else
          {
              if(parseFloat(img3.files[0].size/(1024*1024))>=3)
              {
                  alert('File có kích thước tối đa là 3MB. File hiện tại: ' + parseFloat(img3.files[0].size/(1024*1024)) );
                  return false;
              }
          }

      }else{
          alert('Bạn chưa chọn ảnh 4');
          return false;
      }
      return true;
  }
</script>

<script>
  document.getElementById("files").onchange = function () {
  var reader = new FileReader();

  reader.onload = function (e) {
      // get loaded data and render thumbnail.
      document.getElementById("image").src = e.target.result;
  };

  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
};
</script>

<script type="text/javascript">
  $(document).ready(function () {
          bsCustomFileInput.init();
      });
</script>

<script>
document.getElementById("files1").onchange = function () {
var reader = new FileReader();

reader.onload = function (e) {
    // get loaded data and render thumbnail.
    document.getElementById("image1").src = e.target.result;
};

// read the image file as a data URL.
reader.readAsDataURL(this.files[0]);
};
</script>

<script type="text/javascript">
  $(document).ready(function () {
          bsCustomFileInput.init();
      });
</script>

<script>
document.getElementById("files2").onchange = function () {
var reader = new FileReader();

reader.onload = function (e) {
    // get loaded data and render thumbnail.
    document.getElementById("image2").src = e.target.result;
};

// read the image file as a data URL.
reader.readAsDataURL(this.files[0]);
};
</script>

<script type="text/javascript">
  $(document).ready(function () {
          bsCustomFileInput.init();
      });
</script>

<script>
document.getElementById("files3").onchange = function () {
var reader = new FileReader();

reader.onload = function (e) {
    // get loaded data and render thumbnail.
    document.getElementById("image3").src = e.target.result;
};

// read the image file as a data URL.
reader.readAsDataURL(this.files[0]);
};
</script>

@endsection