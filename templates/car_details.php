<?php var_dump($this->data); exit;?>

<form class="needs-validation" novalidate>
  <div class="row">
    <div class="col-md-4 mb-3">
      <label for="plate"><b>Patente</b></label>
      <input type="text" class="form-control" id="plate" placeholder="" value="<?php echo strtoupper($this->data['plate']);?>" disabled>
    </div>
    <div class="col-md-4 mb-3">
      <label for="year"><b>A&ntilde;o</b></label>
      <input type="text" class="form-control" id="year" placeholder="" value="<?php echo ($this->data['year']);?>" disabled>
    </div>
    <div class="col-md-4 mb-3">
      <label for="color"><b>Color</b></label>
      <input type="text" class="form-control" id="color" placeholder="" value="<?php echo ($this->data['color']);?>" disabled>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="brandName"><b>Marca</b></label>
      <input type="text" class="form-control" id="brandName" placeholder="" value="<?php echo ($this->data['brand']);?>" disabled>
    </div>
    <div class="col-md-6 mb-3">
      <label for="modelName"><b>Modelo</b></label>
      <input type="text" class="form-control" id="modelName" placeholder="" value="
      <?php if(is_array($this->data['model'])){ echo ($this->data['model'][0]); }else{ echo ($this->data['model']); } ?>" disabled>
    </div>
  </div>

  <div class="mb-3">
    <label for="nMotor"><b>N&uacute;mero de Motor</b></label>
    <input type="text" class="form-control" id="nMotor" placeholder="" value="<?php echo ($this->data['nmotor']);?>" disabled>
  </div>

  <div class="mb-3">
    <label for="nChasis"><b>N&uacute;mero de Chasis</b></label>
    <input type="text" class="form-control" id="nChasis" placeholder="" value="<?php echo ($this->data['vin']);?>" disabled>
  </div>

  <div class="row">
      <div class="col-md-4 mb-3">
        <label for="plate"><b>Clase</b></label>
        <input type="text" class="form-control" id="plate" placeholder="" value="<?php echo strtoupper($this->data['class']);?>" disabled>
      </div>
      <div class="col-md-4 mb-3">
        <label for="year"><b>Propietarios</b></label>
        <input type="text" class="form-control" id="year" placeholder="" value="<?php echo count($this->data['related']);?>" disabled>
      </div>
      <div class="col-md-4 mb-3">
        <label for="color"><b>Carabineros</b></label>
        <input type="text" class="form-control" id="color" placeholder="" value="<?php echo ($this->data['stolen']);?>" disabled>
      </div>
    </div>
  </div>

</form>
