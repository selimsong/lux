/**
 * Created by NcXe on 13-12-12.
 */

function changeUpload(data, status){
    if(status != 1){
        data = URL+data;
    }
    $('#file_upload').uploadify({
        'formData'     : {
            'timestamp' : timestamp,
            'token'     : token
        },
        'swf'      : swf,
        'uploader' : uploader,
        'buttonImage' : data,
        'buttonClass' : '',
        'queueID'  : 'none',
        'width' : 112,
        'height' : 100,
        'queueSizeLimit' : 1,
        'sizeLimit': 86400,
        'multi' : false,
        'fileTypeExts' : '*.jpg;*.jpeg;*.png;',
        'onUploadSuccess': function(file,data,response) {
            if(response && data.indexOf("data") > 0){
                $('#fileurl').val(data);
                changeUpload(data);
            } else {
                alert(data);
            }
        },
        'onUploadError' : function(file, errorCode, errorMsg, errorString)
        {
            alert("文件上传失败");
        }
    });
}