<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<style>
    table {
        border-collapse: collapse;
        border: 1px solid #ddd;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<table>
    <thead>
        <tr>
            <th>STT</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($arrs); $i++) { ?>
            <tr>
                <td><?php echo $arrs[$i]; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>