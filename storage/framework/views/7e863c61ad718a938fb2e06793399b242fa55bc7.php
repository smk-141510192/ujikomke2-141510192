<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
                <h1><center>Data Penggajian</center></h1></div>
                <div class="panel-body">

	
	<a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-success"> Tambah Data </a>
	<hr>

	<table class="table table-striped table-bordered table-hover">
		<thead>
		<tr class="bg-info">
			<th> No </th>
			<th><center>Nama Pegawai</center></th>
			<th><center>Besaran Uang(Tunjangan)</center></th>
			<th><center>Gaji Pokok(Uang Jabatan+Golongan)</center></th>
			<th><center>Uang Lembur</center></th>
			<th><center>Jumlah Jam </center>
			<th><center>Total Gaji</center>
			<th><center>Status Pengambilan</center></th>
			<th><center>Petugas Penggambilan</center></th>
	
			<th colspan="2"><center> Action </center></th>
		</tr>
		</thead>
		
		<tbody>
	<?php $__currentLoopData = $Penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($data->id); ?></td>
				<td> <?php echo e($data->Tunjangan_pegawai->Pegawai->User->name); ?></td>
				<td> <?php echo e($data->Tunjangan_pegawai->Tunjangan->Besaran_uang); ?></td>
				<td> <?php echo e($data->Tunjangan_pegawai->Pegawai->Jabatan->Besaran_uang + $data->Tunjangan_pegawai->Pegawai->Golongan->Besaran_uang); ?></td>
				<td></td>
				<td></td>
				<td> <?php echo e($data->Tunjangan_pegawai->Tunjangan->Besaran_uang + $data->Tunjangan_pegawai->Pegawai->Jabatan->Besaran_uang + $data->Tunjangan_pegawai->Pegawai->Golongan->Besaran_uang); ?></td>

				<td> <?php echo e($data->Status_pengambilan); ?></td>
				<td> <?php echo e($data->Petugas_penerima); ?></td>

				<td><center><a href="<?php echo e(route('Penggajian.edit', $data->id)); ?>" class="btn btn-warning">Update</a></center></td>  
	<td>  

	<center><?php echo Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]); ?>

	<?php echo Form::submit('Delete', ['class' => 'btn btn-primary']); ?></center>
	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>

	</table>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>