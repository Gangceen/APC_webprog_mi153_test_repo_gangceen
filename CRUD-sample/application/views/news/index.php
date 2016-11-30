<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
		<td><strong>Email</strong></td>
        <td><strong>Home_Address</strong></td>
		<td><strong>Gender</strong></td>
        <td><strong>Cp_Num</strong></td>
        <td><strong>Comment</strong></td>
		<td><strong>Action</strong></td>
    </tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['Name']; ?></td>
			<td><?php echo $news_item['Nickname']; ?></td>
			<td><?php echo $news_item['Email']; ?></td>
			<td><?php echo $news_item['Home_Address']; ?></td>
			<td><?php echo $news_item['Gender']; ?></td>
			<td><?php echo $news_item['Cp_Num']; ?></td>
			<td><?php echo $news_item['Comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['User_ID']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
