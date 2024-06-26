<style>
    .hidden {
        display: none;
    }
</style>

<div class="container-fluid page-header py-6">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Usuario</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">User</a></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2>Bienvenido</h2>
        <p>Seleccione una opción para continuar</p>
        <?php
        $error = '';

        if (isset($_GET['error'])) {
            if ($_GET['error'] == 1) {
                $error = "Error con el login, puedes haber introducido mal la contraseña o el correo electrónico.";
            } elseif ($_GET['error'] == 2) {
                $error = "Error con el registro, esos datos ya están registrados.";
            }elseif ($_GET['error'] == 3) {
                $error = "El nombre de usuario 'admin' no está permitido.";
            }

        }

        if ($error) : ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <?php echo $error; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="text-center mb-4">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary" id="loginBtn">Login</button>
            <button type="button" class="btn btn-secondary" id="registerBtn">Register</button>
        </div>
    </div>

    <div id="loginForm" class="card p-4 shadow-sm mb-5">
        <h3 class="card-title">Login</h3>
        <form action="index.php?c=User&a=actionLogin" method="POST">
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <div id="registerForm" class="card p-4 shadow-sm mb-5 hidden">
        <h3 class="card-title">Register</h3>
        <form action="index.php?c=User&a=register2" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" class="btn btn-secondary w-100">Register</button>
        </form>
    </div>
</div>