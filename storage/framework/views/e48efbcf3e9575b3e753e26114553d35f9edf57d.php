<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Livewire\Component;


class UsersTable extends Component{
    public function render(){
    return view('livewire.users-table',['users' => User::paginate()]);
	}
}

?>
<div>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($user->name); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH /home/vagrant/proyectoslarabel/jhvj/jeststream/resources/views/livewire/users-table.blade.php ENDPATH**/ ?>