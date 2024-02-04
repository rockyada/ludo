<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminpnlx\LoginController;
use App\Http\Controllers\adminpnlx\PlayersController;
use App\Http\Controllers\adminpnlx\AdminDashboardController;
use App\Http\Controllers\adminpnlx\NotificationController;
use App\Http\Controllers\adminpnlx\GamesController;
use App\Http\Controllers\adminpnlx\AdminSettingsController;
use App\Http\Controllers\adminpnlx\WithdrawRequestController;
use App\Http\Controllers\adminpnlx\PaymentsController;
use App\Http\Controllers\adminpnlx\KycApprovedController;
use App\Http\Controllers\adminpnlx\KycPendingController;
use App\Http\Controllers\adminpnlx\NewBattlesController;
use App\Http\Controllers\adminpnlx\RunningBattlesController;
use App\Http\Controllers\adminpnlx\BattlesResultController;
use App\Http\Controllers\adminpnlx\BattlesDisputeController;

// Admin Panel Route :- 
Route::prefix('adminpnlx')->group(function () {
    Route::any('',[LoginController::class, 'login'])->name('adminpnlx');
    Route::any('forget_password', [LoginController::class, 'forgetPassword'])->name('forgetPassword');
    Route::any('reset_password/{validstring}', [LoginController::class, 'resetPassword'])->name('reset_password/{validstring}');
    Route::any('save_password',[LoginController::class,'save_password'])->name('save_password');

    Route::middleware(['AuthAdmin'])->group(function () {
        
        /*dashboard Route */
        Route::get('dashboard',[AdminDashboardController::class, 'showdashboard'])->name('dashboard');
        Route::get('logout',[LoginController::class, 'logout'])->name('logout');
        Route::any('myaccount', [AdminDashboardController::class, 'myaccount'])->name('myaccount');
        Route::any('changedPassword', [AdminDashboardController::class, 'changedPassword'])->name('changedPassword');

        /* Players routes */
        Route::resource('players',PlayersController::class);
        Route::get('players/update-status/{id}/{status}',[PlayersController::class,'changeStatus'])->name('players.status');
        Route::any('players/changed-password/{id}',[PlayersController::class, 'changedPassword'])->name('players.changedPassword');
        Route::post('players/amount-add/{id}',[PlayersController::class,'amountAdd'])->name('players.amountAdd');
        /* Players routes */

        // Games Route -
        Route::resource('games',GamesController::class);
        Route::get('games/update-status/{id}/{status}',[GamesController::class,'changeStatus'])->name('games.status');
        
        // Payments Route :- 
        Route::resource('payments',PaymentsController::class);

        // admin settings Route -
        Route::any('admin-settings',[AdminSettingsController::class,'index']);

        // KYC Approved
        Route::resource('kyc-approved',KycApprovedController::class);

        // KYC Pending
        Route::resource('kyc-pending',KycPendingController::class);
        Route::get('kyc-pending/update-status/{id}/{status}',[KycPendingController::class,'changeStatus'])->name('kyc-pending.status');

        // Games Route:- 
        Route::resource('new-battles',NewBattlesController::class);
        Route::resource('running-battles',RunningBattlesController::class);
        Route::resource('battles-result',BattlesResultController::class);


        Route::resource('battles-dispute',BattlesDisputeController::class);
        Route::get('battles-dispute/battle-pending/{id}',[BattlesDisputeController::class,'battle_pending'])->name('battles-dispute.battlePending');
        Route::post('battles-dispute/update-result/{id}',[BattlesDisputeController::class,'updateResult'])->name('battles-dispute.updateResult');
        Route::get('battles-dispute/cancel-battle/{id}',[BattlesDisputeController::class,'cancelBattle'])->name('battles-dispute.cancelBattle');

        // Withdraw Request Route :-
        Route::resource('withdraw-request',WithdrawRequestController::class);
        Route::get('withdraw-request/update-status/{id}/{status}',[WithdrawRequestController::class,'changeStatus'])->name('withdraw-request.status');
        // Notification Route:-
        Route::any('marquee-notification',[NotificationController::class,'marqueeNotification']);

        /* cms manager routes */
        Route::resource('cms-manager', App\Http\Controllers\adminpnlx\CmspagesController::class);
        Route::get('cms-manager/destroy/{encmsid?}', [App\Http\Controllers\adminpnlx\CmspagesController::class, 'destroy'])->name('cms-manager.delete');
        //  cms manager routes 

        /** email templates routing**/
        Route::resource('email-templates', App\Http\Controllers\adminpnlx\EmailtemplateController::class);
        Route::match(['get', 'post'], 'email-templates/get-constant', [App\Http\Controllers\adminpnlx\EmailtemplateController::class, 'getConstant'])->name('email-templates.getConstant');
        /** email templates routing**/

        /** email logs routing**/
        Route::match(['get', 'post'], 'email-logs', [App\Http\Controllers\adminpnlx\EmailLogsController::class, 'index'])->name('emaillogs.listEmail');
        Route::match(['get', 'post'], 'email-logs/email_details/{enmailid?}', [App\Http\Controllers\adminpnlx\EmailLogsController::class, 'emailDetail'])->name('emaillogs.emailDetail');
        /** email logs routing**/

        /** settings routing**/
        Route::resource('settings', App\Http\Controllers\adminpnlx\SettingsController::class);
        Route::match(['get', 'post'], '/settings/prefix/{enslug?}', [App\Http\Controllers\adminpnlx\SettingsController::class, 'prefix'])->name('settings.prefix');
        Route::get('settings/destroy/{ensetid?}', [App\Http\Controllers\adminpnlx\SettingsController::class, 'destroy'])->name('settings.delete');
        /** settings routing**/

        /** Access Control Routes Starts **/
        Route::resource('acl', App\Http\Controllers\adminpnlx\AclController::class);
        Route::get('acl/destroy/{enaclid?}', [App\Http\Controllers\adminpnlx\AclController::class, 'destroy'])->name('acl.delete');
        Route::get('acl/update-status/{id}/{status}', [App\Http\Controllers\adminpnlx\AclController::class, 'changeStatus'])->name('acl.status');
        Route::post('acl/add-more/add-more', [App\Http\Controllers\adminpnlx\AclController::class, 'addMoreRow'])->name('acl.addMoreRow');
        Route::get('acl/delete-function/{id}', [App\Http\Controllers\adminpnlx\AclController::class, 'delete_function'])->name('acl.delete_function');

        /* staff routes */
        Route::resource('staff', App\Http\Controllers\adminpnlx\StaffController::class);
        Route::get('staff/update-status/{id}/{status}', [App\Http\Controllers\adminpnlx\StaffController::class, 'changeStatus'])->name('staff.status');
        Route::get('staff/destroy/{enstfid?}', [App\Http\Controllers\adminpnlx\StaffController::class, 'destroy'])->name('staff.delete');
        Route::match(['get', 'post'], 'staff/changed-password/{enstfid?}', [App\Http\Controllers\adminpnlx\StaffController::class, 'changedPassword'])->name('staff.changerpassword');
        Route::match(['get', 'post'], 'staff/get-designations', [App\Http\Controllers\adminpnlx\StaffController::class, 'getDesignations'])->name('staff.getDesignations');
        Route::match(['get', 'post'], 'staff/get-staff-permission', [App\Http\Controllers\adminpnlx\StaffController::class, 'getStaffPermission'])->name('staff.getStaffPermission');

        /**  Designations routes **/
        Route::match(['get', 'post'], '/designations', [App\Http\Controllers\adminpnlx\DesignationsController::class, 'index'])->name('designations.index');
        Route::match(['get', 'post'], 'designations/add', [App\Http\Controllers\adminpnlx\DesignationsController::class, 'add'])->name('designations.add');
        Route::match(['get', 'post'], 'designations/edit/{endesid?}', [App\Http\Controllers\adminpnlx\DesignationsController::class, 'update'])->name('designations.edit');
        Route::get('designations/update-status/{id}/{status}', [App\Http\Controllers\adminpnlx\DesignationsController::class, 'changeStatus'])->name('designations.status');
        Route::get('designations/delete/{endesid}', [App\Http\Controllers\adminpnlx\DesignationsController::class, 'delete'])->name('designations.delete');
        /* Designations routes */
        
    });
});
