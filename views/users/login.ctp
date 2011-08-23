<div id="login">
<div class="box box-50 altbox">
			<div class="boxin">
				<div class="header">
					<h3>OpenSGA - ESCOLA<!--<img src="css/img/logo-login.png" alt="Boxie Admin" />--></h3>
				</div>
				<?php     echo $this->Form->create('User', array('action' => 'login','class'=>'table')); ?><!-- Default forms (table layout) -->
					<div class="inner-form">
						<div class="msg msg-info">
							<p> <?php echo  $this->Session->flash('auth');?></p>
						</div>
						<table cellspacing="0">
							<tr>
								<th><label for="some1">Utilizador:</label></th>
								<td><?php echo $this->Form->input('username',array('div'=>false,'label'=>false,'class'=>'input','id'=>'user_login'))?></td>
							</tr>
							<tr>
								<th><label for="some3">Senha:</label></th>
								<td><?php echo $this->Form->input('password',array('div'=>false,'label'=>false,'class'=>'input','id'=>'user_login'))?></td><!-- class error for wrong filled inputs -->
							</tr>
							<tr>
								<th></th>
								<td class="tr proceed">
									<input type="submit" tabindex="100" value="Entrar" class="button-primary" id="wp-submit" name="wp-submit">
								</td>
							</tr>
						</table>
					</div>
				</form>
			</div>
		</div>


</div>