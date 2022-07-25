<div class="row">
    <div class="col-md-12">
     <h2><?php echo lang('index_heading');?></h2>   
        <h5><?php echo lang('index_subheading');?> </h5>       
    </div>
</div>
<hr />

<div id="infoMessage"><?php echo $message;?></div>

<div class="row">
	<div class="col-md-8">
		<table class="table table-hover table-bordered table-striped">
			<tr>
				<th><?php echo lang('index_fname_th');?></th>
				<th><?php echo lang('index_lname_th');?></th>
				<th><?php echo lang('index_email_th');?></th>
				<th><?php echo lang('index_status_th');?></th>
				<th><?php echo lang('index_action_th');?></th>
			</tr>
			<?php foreach ($users as $user):?>
				<tr>
		            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
		            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
		            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
					<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
					<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
				</tr>
			<?php endforeach;?>
		</table>

		<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?></p>
	</div>
</div>