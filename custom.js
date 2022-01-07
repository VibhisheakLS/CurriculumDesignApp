var tableContents='<div id="print-content"><form><table width="100%",table border-collapse="collapse"><tbody>';
var tableContents1='<div id="print-content"><form><table width="100%",table border-collapse="collapse"><tbody>';
var tableContents2='<div id="print-content"><form><table width="100%",table border-collapse="collapse"><tbody>';
var syl='<div id="print-content"><form><table width="100%",table border-collapse="collapse"><tbody>';
s=1;
function addStudent()
    { 
      var CONumber=document.sample.CONumber.value; 
      var statement=document.sample.statement.value; 
      var weightage=document.sample.weightage.value; 
      var sampQues=document.sample.sampQues.value; 
        
        var tr = document.createElement('tr');
        
        var td1 = tr.appendChild(document.createElement('td'));
        var td2 = tr.appendChild(document.createElement('td'));
        var td3 = tr.appendChild(document.createElement('td'));
        var td4 = tr.appendChild(document.createElement('td'));
        
        
        td1.innerHTML=CONumber;
        td2.innerHTML=statement;
        td3.innerHTML=weightage;
        td4.innerHTML=sampQues;

        document.getElementById("tbl").appendChild(tr);
        
        tableContents+='<tr><td>'+CONumber+'</td><td>'+statement+'</td><td>'+weightage+'</td></tr>';
        syl+='<tr>Course Outcome '+s+'(CO'+s+')</tr><br>'+'<tr>'+sampQues+'</tr><br>';
        s++;
    }
    
  
    
  
      function printDiv(divName) {
       //alert('s');
       var printContents = '<div id="print-content"><form><table width="100%"><tbody>';
        var inputs, index;
        printContents +='<tr>';
        var tr = document.createElement('tr');
        var td1 = tr.appendChild(document.createElement('td'));

        inputs = document.getElementsByTagName('input');

        var fieldName1 = inputs[0].name;
         var fieldValue1 = inputs[0].value;
         var fieldName2 = inputs[1].name;
         var fieldValue2 = inputs[1].value;
         var fieldName3 = inputs[2].name;
         var fieldValue3 = inputs[2].value;
         td1.innerHTML=fieldValue;
         //document.getElementById("tbl1").appendChild(tr);
         //td2.innerHTML=statement;
        printContents +='<div id="print-content"><form><table width="100%" border= "1px solid black" style="border-collapse:collapse"><tbody><tr><td style="text-align:center" width="33%"><b>'+fieldValue1+'</td><td style="text-align:center" width="33%">'+fieldValue2+'</td><td style="text-align:center" width="33%">'+fieldValue3+'</td></tr></tbody></table>'
        
        //

        
        tableContents1 +='</tbody></table>';
         printContents +=tableContents1;

  
      var fieldName = inputs[3].name;
      var fieldValue = inputs[3].value;
      printContents +='<div id="print-content"><form><table width="100%"><tbody><tr bgcolor="grey"><td><b>'+fieldName+'</td></tr><tr><td>  '+'    '+fieldValue+'</td></tr></tbody></table>';
      
      var fieldName = inputs[4].name;
      var fieldValue = inputs[4].value;
      printContents +='<div id="print-content"><form><table width="100%"><tbody><tr bgcolor="grey"><td><b>'+fieldName+'</td></tr><tr><td>  '+'    '+fieldValue+'</td></tr></tbody></table>';
      
      


      /////
      
      
        var x='Course outcomes';
        printContents +='<div id="print-content"><form><table width="100%"><tbody><tr bgcolor="grey"><td><b>'+x+'</td></tr>';

            var fieldName5 = inputs[5].name;
      var fieldValue5 = inputs[5].value;
      var fieldName6 = inputs[6].name;
      var fieldValue6 = inputs[6].value;
      var fieldName7 = inputs[7].name;
      var fieldValue7 = inputs[7].value;
      td1.innerHTML=fieldValue;
      td1.innerHTML=fieldName;
           
      
        printContents +='<div id="print-content"><form><table width="100%"><tbody><tr bgcolor="grey"><td><b>'+x+'</td></tr>';
         printContents +='<div id="print-content"><form><table width="100%" border= "1px solid black" style="border-collapse:collapse"><tbody><tr><th style="text-align:center" width="33%"><b>'+fieldName5+'</th><th style="border-collapse:collapse" style="text-align:center" width="33%">'+fieldName6+'</th><th style="border-collapse:collapse" style="text-align:center" width="33%">'+fieldName7+'</th></tr><tr><td style="text-align:center" width="33%"><b>'+fieldValue5+'</td><td style="text-align:center" width="33%">'+fieldValue6+'</td><td style="text-align:center" width="33%">'+fieldValue7+'</td></tr><tr><td style="text-align:center" width="33%"><b>'+fieldValue5+'</td><td style="text-align:center" width="33%">'+fieldValue6+'</td><td style="text-align:center" width="33%">'+fieldValue7+'</td></tr></tbody></table>'; 

        tableContents2 +='</tbody></table>';
        printContents +=tableContents2;


         var y='Sample Questions for Course Outcome Assessment**';
         printContents +='<div id="print-content"><form><table width="100%"><tbody><tr bgcolor="grey"><td><b>'+y+'</td></tr>';
         syl +='</tbody></table>';

         var y='Syllabus';
         printContents +=syl;

      
       w=window.open();
       w.document.write(printContents);
       w.print();
       w.close();
      }
   
  