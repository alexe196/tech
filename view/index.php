<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="admin" />

    <title>Untitled 1</title>
</head>

<body>

<table >
    <tbody>
        <th>County</th>
        <th>Country</th>
        <th>Town</th>
        <th>Description</th>
        <th>Displayable Address</th>
        <th>Image</th>
        <th>Thumbnail</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Number of Bedrooms</th>
        <th>Number of Bathrooms</th>
        <th>Price</th>
        <th>Type</th>
        <th>For Sale / For Rent</th>
    </tbody>
    <?php foreach($data as $item) : ?>
    <tr>
        <td><?=$item['County']?></td>
        <td><?=$item['Country']?></td>
        <td><?=$item['Town']?></td>
        <td><?=$item['Description']?></td>
        <td><?=$item['DisplayableAddress']?></td>
        <td><?=$item['Image']?></td>
        <td><?=$item['Thumbnail']?></td>
        <td><?=$item['Latitude']?></td>
        <td><?=$item['Longitude']?></td>
        <td><?=$item['NumberofBedrooms']?></td>
        <td><?=$item['NumberofBathrooms']?></td>
        <td><?=$item['Price']?></td>
        <td><?=$item['PropertyDescription']?></td>
        <td><?=$item['type']?></td>
    </tr>
    <?php endforeach;?>
</table>
<div>
    <?=$nav?>
</div>
</body>
</html>