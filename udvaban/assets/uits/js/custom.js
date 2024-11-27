function get_count(e_id,e_flag,e_link){
    myLoadingFunction();
    var formData = {
                        flag: e_flag,
                        edition_id:e_id
                    };
        
    var saveData = $.ajax({
      type: 'POST',
      url: 'track_visitor.php',
      data: formData,
      dataType: "text",
      success: function(resultData) { 
          //alert("Save Complete"+resultData);
          if(e_flag=='download'){
          download(e_link,'Udvaban_'+e_id+'.pdf');
          }else{
          view(e_link,'Udvaban_'+e_id+'.pdf');
          }
    }
});
saveData.error(function() { alert("Something went wrong"); });
        
}

function download(dataurl, filename) {
 var a = document.createElement("a");
  a.href = dataurl;
  a.setAttribute("download", filename);
  a.click();
}


function view(dataurl, filename) {
  var a = document.createElement("a");
  a.href = dataurl;
  a.setAttribute("target", '_blank');
  a.click();
}


function myLoadingFunction() {
    
  document.getElementById("myDiv").style.display = "none";
  myVar = setTimeout(showPage, 2000);
  
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  
  document.getElementById("myDiv").style.display = "block";
}