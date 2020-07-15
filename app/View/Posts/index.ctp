<h1>Blog posts</h1>
<p><small>
		<?php echo $this->Html->link('Add Post',
				array('action' => 'add')
		); ?>
	</small></p>

<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
		<th>Action</th>
	</tr>
	<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post['Post']['id']; ?></td>
			<td>
				<?php echo $this->Html->link($post['Post']['title'],
						array('action' => 'view', $post['Post']['id'])
				); ?>
			</td>
			<td><?php echo $post['Post']['created']; ?></td>
			<td>
				<?php echo $this->Html->link('Edit Post',
						array('action' => 'edit', $post['Post']['id'])
				); ?>
				 |
				<?php echo $this->Form->postLink('Delete Post',
						array('action' => 'delete', $post['Post']['id']),
						array('confirm' => 'Are you sure? You want to delete this post?')
				); ?>
			</td>
		</tr>
	<?php endforeach;
	unset($post) ?>
</table>
