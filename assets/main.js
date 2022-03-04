$(document).ready(function () {


  $("#card").submit(function (e) { 
    e.preventDefault();
    url=$(this).attr('action');
    data=$(this).serialize();
    
    console.log(data);

    $.ajax({
      type: "POST",
      url: url,
      data: data,
      success: function (ans) {
        // console.log(ans)
        // converting the backend response to json(object)
        // ans=JSON.parse(ans);
        // selecting an item in the object from the backend
        $("#info").text(ans.firstQ);
        $("#sn").html(htmlString);
        $("#question1").html(htmlString);
        $("#question2").html(htmlString);
      },
    });
  });
});