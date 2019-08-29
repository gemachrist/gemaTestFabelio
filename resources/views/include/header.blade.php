<?php 
$formLibrary = new \App\Library\TemplateLibrary();
$furnitures = $formLibrary->menu();
?>

<style>
.multiselect {
  width: 100%;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxesA {
  display: none;
  border: 1px #dadada solid;
}

#checkboxesA label {
  display: block;
}

#checkboxesB {
  display: none;
  border: 1px #dadada solid;
}

#checkboxesB label {
  display: block;
}

</style>

<div class="container">   
    <div class="well well-lg" style ="background: #00B4CC; height: 150px;">
        <div class="col-lg-12 row">
            <div class="col-lg-6">
                <input type="text" class="form-control" placeholder="Search Furniture">
            </div>
            <div class="col-lg-6">
            </div>
        </div>
        <div class="col-lg-12 row" style="padding-top: 10px;">
            <div class="col-lg-6">
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxesA()">
                        <select class="form-control">
                        <option>Furniture Style</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxesA" style="background-color: white;">
                        @foreach($furnitures as $furnitures)
                            <label for="{{$furnitures}}">
                            <input class="form-control" type="checkbox" id="{{$furnitures}}" value="{{$furnitures}}"/>{{$furnitures}}</label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxesB()">
                        <select class="form-control">
                        <option>Delivery Time</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxesB" style="background-color: white;">
                            <label for="1">
                            <input class="form-control" type="checkbox" id="1" value="7"/>1 Week</label>
                            <label for="1">
                            <input class="form-control" type="checkbox" id="1" value="14"/>2 Week</label>
                            <label for="1">
                            <input class="form-control" type="checkbox" id="1" value="30"/>1 Month</label>
                            <label for="1">
                            <input class="form-control" type="checkbox" id="1" value="31"/>& More</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
var expanded = false;

function showCheckboxesA() {
  var checkboxes = document.getElementById("checkboxesA");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function showCheckboxesB() {
  var checkboxes = document.getElementById("checkboxesB");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>