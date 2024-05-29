<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use App\Http\Controllers\SuperAdmin\KabinetController;
use App\Http\Controllers\SuperAdmin\HodimlarController;
use App\Http\Controllers\SuperAdmin\FilialController;
use App\Http\Controllers\SuperAdmin\SuperMoliyaController;
use App\Http\Controllers\SuperAdmin\SuperReportController;
use App\Http\Controllers\SuperAdmin\SuperStatistikaController;
use App\Http\Controllers\SuperAdmin\TestController;
use App\Http\Controllers\SuperAdmin\SMSController;
use App\Http\Controllers\SuperAdmin\SuperElonController;
use App\Http\Controllers\SuperAdmin\SuperAdminTecherController;
use App\Http\Controllers\SuperAdmin\ReportControlle;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HodimController;
use App\Http\Controllers\Admin\AdminGuruhController;
use App\Http\Controllers\Admin\AdminTecherController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminKabinetController;
use App\Http\Controllers\Admin\MoliyaController;
use App\Http\Controllers\Techer\TecherController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserGuruhController;
use App\Http\Controllers\User\UserPaymartController;
use App\Http\Controllers\User\UserContactController;
use App\Http\Controllers\User\PaymeController; 
use App\Http\Controllers\SettingController; 
Route::get('/', [HomeController::class, 'index']);

Auth::routes();
 
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(SettingController::class)->group(function () {
    Route::get('/setting', 'index')->name('setting');
    Route::post('/setting', 'update')->name('settingupdate');
    Route::post('/sms/plus', 'smsplus')->name('settingsmsplus');
});

Route::controller(SMSController::class)->group(function () {
    Route::get('/sms', 'index')->name('sms');
    Route::post('/show', 'show')->name('sms_show');
    Route::post('/sms/create', 'send')->name('sms_send');
});

Route::get('/Superadmin/index', [SuperAdminController::class, 'index'])->name('SuperAdmin');
Route::get('/Superadmin/tulov/show/{data}', [SuperAdminController::class, 'tulovShow'])->name('tulovShowSuperAdmin');

Route::get('/Superadmin/hisobot/all/web/index', [ReportControlle::class, 'index'])->name('hisobot');
Route::post('/Superadmin/hisobot/all/show', [ReportControlle::class, 'show'])->name('hisobotShow');

Route::controller(TestController::class)->group(function () {
    Route::get('/Superadmin/Testing', 'index')->name('superAdminTesting');
    Route::get('/Superadmin/Testing/show/{id}', 'show')->name('superAdminTestingShow');
    Route::post('/Superadmin/Testing/create', 'create')->name('superAdminTestingCreate');
    Route::get('/Superadmin/Testing/delete/{id}', 'delete')->name('superAdminTestingDelete');
});

Route::controller(FilialController::class)->group(function () {
    Route::get('/Superadmin/filial', 'filial')->name('filial');
    Route::get('/Superadmin/filial/show/{id}', 'show')->name('filial.show');
    Route::post('/Superadmin/filial/update', 'filialUpdate')->name('filialUpdate');
    Route::post('/Superadmin/filial/delete', 'filialDelete')->name('filialDelete');
    Route::post('/Superadmin/filial/settimg/sms', 'filialSettimgSMS')->name('filialSettimgSMS');
    Route::get('/Superadmin/filailCrm/{id}', 'filailCrm')->name('filailCrm');
    Route::get('/Superadmin/room/delete/{id}', 'roomdelete')->name('roomdelete');
    Route::get('/Superadmin/setting/tulov/deleted/{id}', 'tulovSettingDelete')->name('tulovSettingDelete');
    Route::post('/Superadmin/setting/tulov/create', 'tulovSettingCreate')->name('tulovSettingCreate');
    Route::post('/Superadmin/setting/chegirmaday/update', 'chegirmaDayUpadte')->name('chegirmaDayUpadte');
    Route::post('/Superadmin/room/create', 'roomcreate')->name('roomcreate');
    Route::post('/Superadmin/filial', 'filialcreate')->name('filialcreate');
    Route::post('/Superadmin/cours/create', 'filialCoursCreate')->name('filialCoursCreate');
    Route::get('/Superadmin/cours/delete/{id}', 'filialCoursDelete')->name('filialCoursDelete');
});

Route::controller(SuperMoliyaController::class)->group(function () {
    Route::POST('/Superadmin/moliya/xarajat', 'xarajat')->name('SuperAdminMoliyaXarajay');
    Route::POST('/Superadmin/moliya/kassaga', 'kassaga')->name('SuperAdminMoliyaKassaga');
});

Route::get('/Superadmin/techer/tulovlar', [SuperAdminTecherController::class, 'index'])->name('SuperAdminTecher');

Route::controller(SuperStatistikaController::class)->group(function () {
    Route::get('/Superadmin/statistika/month', 'statistikaMonth')->name('statistikaMonth');
    Route::get('/Superadmin/statistika/{id}', 'index')->name('SuperAdminStatistika');
    Route::get('/Superadmin/statistika/kun/{id}', 'statistikaKun')->name('statistikaKun');
});

Route::controller(SuperElonController::class)->group(function () {
    Route::get('/Superadmin/elon/techer', 'techer')->name('SuperAdminElonTecher');
    Route::get('/Superadmin/elon/student', 'student')->name('SuperAdminElonStudent');
});

Route::controller(HodimlarController::class)->group(function () {
    Route::get('/Superadmin/hodimlar', 'hodimlar')->name('hodimlar');
    Route::post('/Superadmin/hodimlar', 'hodimCreate')->name('hodimCreate');
    Route::get('/Superadmin/del/{id}', 'HodimDeletes')->name('HodimDeletes');
    Route::get('/Superadmin/pass/{id}', 'HodimPassword')->name('HodimPassword');
});

Route::controller(KabinetController::class)->group(function () {
    Route::get('/Superadmin/kabinet', 'kabinet')->name('kabinet');
    Route::put('/Superadmin/kabinet/{id}', 'kabinetUpdate')->name('kabinetUpdate');
    Route::put('/Superadmin/kabinet/password/{id}', 'kabinetPassword')->name('kabinetPassword');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/Admin/index', 'index')->name('Admin');
    Route::get('/Admin/eslatma', 'eslatmalar')->name('AdminEslatma');
    Route::get('/Admin/eslatma/arxiv/{id}', 'eslatmaarxiv')->name('AdminEslatmaArxiv');
    Route::get('/Admin/murojatlar', 'murojatlar')->name('AdminMurojarlar');
    Route::post('/Admin/murojatlar', 'murojatlarCreate')->name('AdminMurojarlarPost');
    Route::get('/Admin/murojatlar/show/{id}', 'murojatlarShow')->name('AdminMurojarlarShow');
    Route::get('/Admin/tkun', 'tkun')->name('AdminTKun');
    Route::get('/Admin/elonlar', 'elonlar')->name('AdminElonlar');
});

Route::controller(AdminStudentController::class)->group(function () {
    Route::get('/Admin/student/index', 'index')->name('Student');
    Route::get('/Admin/student/index/{id}', 'show')->name('StudentShow');
    Route::get('/Admin/student/debit', 'debit')->name('StudentQarzdorlar');
    Route::get('/Admin/student/pays', 'pays')->name('StudentTulovlar');
    Route::get('/Admin/student/create', 'create')->name('StudentCreate');
    Route::post('/Admin/student/story', 'store')->name('StudentCreateStore');
    Route::post('/Admin/student/update', 'update')->name('AdminUserUpdate');
    Route::post('/Admin/student/password/update', 'passwordUpdate')->name('AdminUserPasswordUpdate');
    Route::post('/Admin/student/guruh/plus', 'guruhPlus')->name('AdminUserGuruhPlus');
    Route::post('/Admin/student/send/messege', 'sendMessege')->name('AdminUserSendMessege');
    Route::post('/Admin/student/pay', 'tulov')->name('AdminUserTulov');
    Route::post('/Admin/student/pay/qaytar', 'tulovQaytar')->name('AdminUserTulovQaytar');
    Route::post('/Admin/student/admin/chegirma', 'adminChegirmaMax')->name('AdminUserAdminChegirma');
    Route::post('/Admin/student/comment', 'comment')->name('AdminUserComment');
    Route::get('/Admin/student/pay/delete/{id}', 'tulovDelete')->name('AdminUserTulovDelete');
});

Route::controller(MoliyaController::class)->group(function () {
    Route::get('/Admin/moliya', 'index')->name('AdminMoliya');
    Route::post('/Admin/moliya/chiqim', 'chiqim')->name('AdminMoliyaCHiqim');
    Route::post('/Admin/moliya/chiqim/delete', 'chiqimdelete')->name('AdminMoliyaCHiqimDelete');
    Route::post('/Admin/moliya/chiqim/tasdiqlandi', 'chiqimtasdiq')->name('AdminMoliyaCHiqimTasdiq');
    Route::post('/Admin/moliya/xarajat', 'xarajat')->name('AdminMoliyaXarajat');
    Route::post('/Admin/moliya/xarajat/delete', 'xarajatdelete')->name('AdminMoliyaXarajatDelete');
    Route::post('/Admin/moliya/xarajat/tasdiqlandi', 'xarajattasdiq')->name('AdminMoliyaXarajatTasdiq');
});

Route::controller(AdminGuruhController::class)->group(function () {
    Route::get('/Admin/guruh', 'index')->name('AdminGuruh');
    Route::post('/Admin/guruh/updates', 'showUpdatestGuruh')->name('showUpdatestGuruh');
    Route::post('/Admin/guruh/delete', 'deletGuruh')->name('AdminGuruhDelete');
    Route::get('/Admin/guruh/show/{id}', 'show')->name('AdminGuruhShow');
    Route::get('/Admin/guruh/end', 'endGuruh')->name('AdminGuruhEnd'); 
    Route::get('/Admin/guruh/create', 'CreateGuruh')->name('AdminGuruhCreate');
    Route::post('/Admin/guruh/create1', 'CreateGuruh1')->name('AdminGuruhCreate1');
    Route::post('/Admin/guruh/create2', 'CreateGuruh2')->name('AdminGuruhCreate2');
    Route::put('/Admin/guruh/create/next', 'CreateGuruhNext')->name('CreateGuruhNext');
    Route::post('/Admin/guruh/create/next2', 'CreateGuruhNext2')->name('CreateGuruhNext2');
    Route::post('/Admin/guruh/deleteUser', 'guruhDelUser')->name('guruhDeletesUserss');
    Route::post('/Admin/guruh/user/sendMessege', 'userSendMessege')->name('userSendMessege');
    Route::post('/Admin/guruh/debit/sendMessege', 'debitSendMessege')->name('debitSendMessege');
});

Route::controller(AdminTecherController::class)->group(function () {
    Route::get('/Admin/admin/techer', 'index')->name('AdminTecher');
    Route::post('/Admin/admin/techer', 'techerCreate')->name('AdminTecherCreate');
    Route::post('/Admin/admin/techer/update', 'techerUpdate')->name('AdminTecherUpdate');
    Route::post('/Admin/admin/techer/pay', 'TecherPay')->name('AdminTecherPay');
    Route::get('/Admin/admin/techer/pay/del/{id}', 'TecherPayDelet')->name('AdminTecherPayDel');
    Route::post('/Admin/admin/techer/update/password', 'techerUpdatePassword')->name('AdminTecherUpdatePassword');
    Route::get('/Admin/admin/techer/show/{id}', 'techerShow')->name('AdminTecherShow');
    Route::get('/Admin/admin/techer/delete/{id}', 'techerDelete')->name('AdminTecherDelete');
});

Route::controller(AdminKabinetController::class)->group(function () {
    Route::get('/Admin/hodim/kabinet', 'kabinet')->name('adminkabinet');
    Route::post('/Admin/hodim/kabinet/update', 'update')->name('adminkabinetupdate');
    Route::post('/Admin/hodim/kabinet/passwupdate', 'passwupdate')->name('adminkabinetpasswupdate');
});

Route::controller(HodimController::class)->group(function () {
    Route::get('/Admin/hodim/', 'adminHodimlar')->name('adminHodimlar');
    Route::get('/Admin/hodim/{id}', 'adminHodim')->name('adminHodim');
    Route::get('/Admin/hodim/delete/{id}', 'adminHodimDelete')->name('adminHodimDelete');
    Route::post('/Admin/hodim/create', 'adminCreateHodimlar')->name('adminCreateHodimlar');
    Route::post('/Admin/hodim/clear/statistika', 'adminClearHodimlarStatistik')->name('adminClearHodimlarStatistik');
    Route::post('/Admin/hodim/update/user', 'adminUpdateHodimlarUser')->name('adminUpdateHodimlarUser');
    Route::post('/Admin/hodim/update/password', 'adminUpdateHodimlarPassword')->name('adminUpdateHodimlarPassword');
    Route::post('/Admin/hodim/pay/ishhaqi', 'adminPayHodimlarIshHaqi')->name('adminPayHodimlarIshHaqi');
});

Route::controller(TecherController::class)->group(function () {
    Route::get('/Techer/index',  'index')->name('Techer');
    Route::get('/Techer/guruhlar',  'Guruhlar')->name('TGuruhlar');
    Route::get('/Techer/guruh/{id}',  'show')->name('TGuruhShow');
    Route::post('/Techer/guruh/davomat',  'davomat')->name('TGuruhDavomat');
    Route::get('/Techer/tulovlar',  'Tolovlar')->name('TTolovlar');
    Route::get('/Techer/kabinet',  'Kabinet')->name('TKabinet');
    Route::post('/Techer/kabinet/update',  'KabinetTUpdate')->name('KabinetTUpdate');
    Route::post('/Techer/kabinet/update/password',  'KabinetTUpdatePassword')->name('KabinetTUpdatePassword');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/User/index', 'index')->name('User');
    Route::get('/User/kabinet', 'Kabinet')->name('Kabinet');
    Route::post('/User/kabinet/update', 'KabinetUpdate')->name('KabinetUpdate');
    Route::post('/User/kabinet/password/update', 'KabinetUpdatePassw')->name('KabinetUpdatePassw');
});

Route::controller(UserGuruhController::class)->group(function () {
    Route::get('/User/guruhlar', 'Guruhlar')->name('Guruhlar');
    Route::get('/User/guruhlar/show/{id}', 'show')->name('GuruhShow');
    Route::get('/User/guruhlar/test/show/{id}', 'test')->name('GuruhShowTest');
    Route::post('/User/guruhlar/test/check', 'check')->name('GuruhShowTestCheck');
});

Route::controller(UserPaymartController::class)->group(function () {
    Route::get('/User/tolovlar', 'Tolovlar')->name('Tolovlar');
    Route::post('/User/tolov', 'pay2')->name('TolovPost');
    Route::get('/User/tolovlar/{summa}', 'pay')->name('Tolov');
});

Route::controller(UserContactController::class)->group(function () {
    Route::get('/User/contact', 'Contact')->name('Contact');
    Route::post('/User/contact', 'ContactPost')->name('ContactPost');
});

Route::post('/payme', [PaymeController::class, 'index']);