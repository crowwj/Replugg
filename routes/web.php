<?php
use App\Http\Controllers\PanelController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Models\Producto;
use App\Models\User;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\SellerController;

Route::get('/', [ProductoController::class, 'index']);


//Vistas Publicas ///////////////////////////////
Route::get('/', function () {
    return view('main');
});

Route::get('/ayuda', function () {
    return view('components.ayuda');
});

Route::get('/ProductoDetalle', function () {
    return view('productos.ProductoDetalle');
});

Route::get('/', [ProductoController::class, 'index']);

Route::get('/info', function () {
    return view('components.panelinfo');
});
///////////////////////////////////////////////////

// Vistas privadas ////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/direcciones', function () {
    return view('components.panel.direcciones.direccionesAdd');
})->middleware('auth');


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'can:admin']);

Route::get('/admin/dashboard', function () {
    $totalUsuarios = User::count();
    $totalProductos = Producto::count(); 
    
    return view('admin.dashboard', compact('totalUsuarios', 'totalProductos'));
})->middleware(['auth', 'can:admin']);


Route::middleware(['auth'])->group(function () {
    Route::get('/vender-check', [SellerController::class, 'checkRole'])->name('seller.check');
    Route::get('/vender/terms', [SellerController::class, 'showTerms'])->name('seller.terms');
    Route::post('/vender/become-seller', [SellerController::class, 'becomeSeller'])->name('seller.become');
    Route::get('/vender/formulario', [SellerController::class, 'showForm'])->name('seller.form');
});

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('productos.show');

//////////////////////////////////////////

Route::get('/productos/categoria/{id}', function ($id) {
    return Producto::where('id_categoria', $id)->get();
});


// LOGIN //
Route::get('/usuario', function () {
    return view('components.login.usuario');
})->name('login');

Route::post('/login-check', [LoginController::class, 'login'])->name('usuarios.login');

//////////////////


//CAMBIAR DATOS /////////

Route::post('/perfil/actualizar', [ProfileController::class, 'update'])->name('profile.update');

Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('password.update');

//REGISTRO //////////

Route::get('/registro', function () {
    return view('components.login.registro');
});

Route::post('/registro', [RegistroController::class, 'registro'])->name('usuarios.registro');

////////////////////////

//FinProductos  /////////

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Cambio de Comprador - Vendedor 

Route::get('/vender', function () {
    $user = Auth::user();
    if ($user->role !== 'seller' && $user->role !== 'admin') {
        return view('vender.terminos');
    } 
    return view('vender.publicar');
})->middleware('auth');

require __DIR__.'/auth.php';


//carrito

Route::delete('/carrito/remove/{id}', [CarritoController::class, 'remove'])->name('carrito.remove');

Route::middleware('auth')->group(function() {
    Route::post('/carrito/add/{id}', [CarritoController::class, 'add'])->name('carrito.add');
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
    
});


Route::post('/carrito/checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');


// Historial 

Route::post('/carrito/checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');

Route::get('/mis-pedidos', function() {
    $pedidos = \DB::table('pedidos')
                ->where('id_usuario', auth()->id())
                ->orderBy('fecha', 'desc')
                ->get();
    return view('productos.historial', compact('pedidos'));
})->name('pedidos.historial')->middleware('auth');



//Seller 

Route::post('/vender/producto', [SellerController::class, 'store'])->name('producto.store');

Route::middleware(['auth'])->group(function () {
    // 1. El botón "Vender Producto" del panel apuntará a esta ruta
    Route::get('/vender/verificar', [SellerController::class, 'checkRole'])->name('seller.check');

    // 2. Vista de términos y condiciones (si no es vendedor)
    Route::get('/vender/terminos', [SellerController::class, 'showTerms'])->name('seller.terms');

    // 3. Acción POST para procesar el cambio de rol a 'seller'
    Route::post('/vender/aceptar', [SellerController::class, 'becomeSeller'])->name('seller.become');

    // 4. Formulario final para publicar el producto (donde creas el producto)
    Route::get('/vender/formulario', [SellerController::class, 'showForm'])->name('seller.form');
});



Route::get('/panel/direcciones/nueva', function () {
    return view('components.panel.direcciones.direccionesAdd');
})->name('direcciones.create');

Route::post('/panel/direcciones', [DireccionController::class, 'store'])->name('direcciones.store');
Route::get('/panel/direcciones/nueva', [DireccionController::class, 'create'])->name('direcciones.create');

Route::post('/direcciones', [App\Http\Controllers\DireccionController::class, 'store'])->name('direcciones.store');


Route::get('/panel/direcciones', [App\Http\Controllers\DireccionController::class, 'index'])->name('direcciones.index');

Route::get('/panel/direcciones', [App\Http\Controllers\DireccionController::class, 'index'])->name('direcciones.index');

Route::get('/panel/direcciones', [App\Http\Controllers\DireccionController::class, 'index'])->name('direcciones.dirGuar');

Route::post('/panel/direcciones/seleccionar/{id}', [App\Http\Controllers\DireccionController::class, 'seleccionar'])->name('direcciones.seleccionar');

Route::get('/panel', [PanelController::class, 'index'])->name('panel.index');

Route::get('/panel/direcciones', [DireccionController::class, 'index'])->name('direcciones.index');


// 1. Ruta del Panel Principal
Route::get('/panel', [PanelController::class, 'index'])->name('panel.index');

// 2. Rutas de Direcciones (Agrupadas para que no haya duplicados)
Route::get('/panel/direcciones', [DireccionController::class, 'index'])->name('direcciones.index');
Route::get('/panel/direcciones/create', [DireccionController::class, 'create'])->name('direcciones.create');
Route::post('/panel/direcciones/store', [DireccionController::class, 'store'])->name('direcciones.store');
Route::post('/panel/direcciones/seleccionar/{id}', [DireccionController::class, 'seleccionar'])->name('direcciones.seleccionar');


// Cambia esto temporalmente a:
Route::any('/carrito/checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');

