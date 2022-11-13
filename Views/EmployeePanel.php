<body>
    <a class="btn border-info" type="button" href="<?php echo FRONT_ROOT."/Home/Index"?>">Return</a>
    <div class="row g-3">
        <div class="col">
            <div class="mb-3">
                <h5>Listado de Employee</h5>
            </div>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th>firstName</th>
                        <th>lastName</th>
                        <th>email</th>
                        <th>dni</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>firstName</td>
                        <td>lastName</td>
                        <td>email</td>
                        <td>dni</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col">
            <div class="mb-3">
                <h5>Agregar un Employee</h5>
            </div>
            <form action="<?php echo FRONT_ROOT."/Employee/Add"?>" method="post" class="was-validated">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input class="form-control" id="firstname" name="firstName" type="text" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input class="form-control" id="lastname" name="lastName" type="text" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" id="email" name="email" type="email" required>
                </div>
                <div class="mb-3">
                    <label for="dni" class="form-label">Dni</label>
                    <input class="form-control" id="dni" name="dni" type="text" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="idCar" required>
                        <option selected disabled value="">Open for select</option>
                        <?php foreach($carList as $car){
                            if(!empty($car->getActive())){?>
                        <option value=<?php echo $car->getId()?>><?php echo $car->getName()?></option>
                        <?php }
                            }?>
                        <div class="invalid-feedback">Example invalid select feedback</div>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>