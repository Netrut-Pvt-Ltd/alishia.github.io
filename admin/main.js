function logoutck() {
  var r = confirm('Do you really want to log out?');
  if (r == true) {
    $(document).ready(function () {
      $.ajax({
        type: 'POST',
        url: 'logout.php',
        data: { logout: 1 },
        // data: {mobile_number}
        success: function (res) {
          //    alert(res);
          location.reload();
        },
        error: function () {
          alert('error');
        },
      });
    });
  }
}

function approve(e) {
  var x = document.getElementById(e);
  if (x.innerHTML === 'Approve') {
    var v = 0;
  } else {
    v = 1;
  }
  $(document).ready(function () {
    $.ajax({
      type: 'POST',
      url: 'permission.php',
      data: { id: e, v: v },
      // data: {mobile_number}
      success: function (res) {
        // alert(res);
        // alert('nice');
        if (res == 'success') {
          if (x.innerHTML === 'Approve') {
            x.innerHTML = 'Disapprove';
            x.classList.remove('btn-info');
            x.classList.add('btn-warning');
          } else {
            x.innerHTML = 'Approve';
            x.classList.remove('btn-warning');
            x.classList.add('btn-info');
          }
        } else {
          swal('Error', 'Please try again', 'error');
        }
      },
      error: function () {
        alert('error');
      },
    });
  });
}

function validation() {
  var position = document.getElementById('inputPosition').value;
  var product = document.getElementById('inputProduct').value;
  var location = document.getElementById('inputLocation').value;
  var industry = document.getElementById('inputIndustry').value;
  var des = document.getElementById('desc').value;

  if (position == '') {
    return false;
  }
  if (product == '') {
    return false;
  }
  if (location == '') {
    return false;
  }
  if (industry == '') {
    return false;
  }
  if (des == '') {
    return false;
  }

  // alert('hello');
  $(document).ready(function () {
    $.ajax({
      type: 'POST',
      url: 'form-validation.php',
      data: $('#forms').serialize(),
      // data: {mobile_number}
      success: function (res) {
        if (res == 1) {
          swal('Great!', 'It was succesfully Created!', 'success');
        } else {
          swal('Error', 'Please try again', 'error');
        }
      },
      error: function () {
        alert('error');
      },
    });
  });

  return false;
}

function editvalidation() {
  var position = document.getElementById('inputPosition').value;
  var product = document.getElementById('inputProduct').value;
  var location = document.getElementById('inputLocation').value;
  var industry = document.getElementById('inputIndustry').value;
  var des = document.getElementById('desc').value;

  if (position == '') {
    return false;
  }
  if (product == '') {
    return false;
  }
  if (location == '') {
    return false;
  }
  if (industry == '') {
    return false;
  }
  if (des == '') {
    return false;
  }

  // alert('hello');
  $(document).ready(function () {
    $.ajax({
      type: 'POST',
      url: 'edit_req.php',
      data: $('#forms').serialize(),
      // data: {mobile_number}
      success: function (res) {
        // alert(res);
        if (res == 1) {
          swal('Great!', 'It was succesfully Edited!', 'success');
        } else {
          swal('Error', 'Please try again', 'error');
        }
      },
      error: function () {
        alert('error');
      },
    });
  });

  return false;
}

function deleteValidation(e) {
  // var x = document.getElementById(e);
  // alert(e);
  swal(
    {
      title: 'Are you sure?',
      text: 'You will not be able to recover this Once It Deleted!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Yes, I am sure!',
      cancelButtonText: 'No, cancel it!',
      closeOnConfirm: false,
      closeOnCancel: false,
    },
    function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          type: 'POST',
          url: 'delete_req.php',
          data: { id: e },
          // data: {mobile_number}
          success: function (res) {
            // alert(res);
            if (res == 1) {
              swal('Deleted!', 'Record are successfully Deleted!', 'success');
              $('#content').load('fetch.php');
            } else {
              swal('Error', 'Please try again', 'error');
            }
          },
          error: function () {
            alert('error');
          },
        });
      } else {
        swal('Cancelled', 'Your Record is safe :)', 'error');
        e.preventDefault();
      }
    }
  );
}

function viewD(e) {
  var name;
  document.getElementById('one').getElementsByTagName('div')[0].id = e;
  $.ajax({
    type: 'POST',
    url: 'modal_details.php',
    data: { id: e },
    // data: {mobile_number}
    success: function (res) {
      var ret = JSON.parse(res);
      // alert(res);
      var position = ret[0];
      var product = ret[1];
      var location = ret[2];
      var industry = ret[3];
      var des = ret[4];
      $('#one').find('.position').text(position);
      $('#one').find('.product').text(product);
      $('#one').find('.location').text(location);
      $('#one').find('.industry').text(industry);
      $('#one').find('.desc').text(des);
      // $('#one first-child').attr('id', e);
    },
    error: function () {
      alert('error');
    },
  });

  // document.getElementById('one').getElementsByTagName('h3')[0].innerHTML = name;
  // alert(e);
  // document.getElementById('one').id = e;
  // document.getElementsByClassName('one').id = e;
}
