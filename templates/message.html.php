<table class="min-w-full bg-white rounded-lg shadow-md">
    <tr class="bg-blue-500 text-white">
        <th class="border px-4 py-2">ID Question</th>
        <th class="border px-4 py-2">Name</th>
        <th class="border px-4 py-2">Email</th>
        <th class="border px-4 py-2">Title</th>
        <th class="border px-4 py-2">Text</th>
    </tr>
    <?php foreach ($system as $message): ?>
    <tr>
        <td class="px-4 py-2"><?=htmlspecialchars($message['id'], ENT_QUOTES, 'UTF-8')?></td>
        <td class="px-4 py-2"><?=htmlspecialchars($message['name_user'], ENT_QUOTES, 'UTF-8')?></td>
        <td class="px-4 py-2">
            <a href="mailto:<?=htmlspecialchars($message['email'], ENT_QUOTES, 'UTF-8')?>" class="text-blue-600 hover:text-blue-900">
                <?=htmlspecialchars($message['email'], ENT_QUOTES, 'UTF-8')?>
            </a>
        </td>
        <td class="px-4 py-2"><?=htmlspecialchars($message['title'], ENT_QUOTES, 'UTF-8')?></td>
        <td class="px-4 py-2"><?=htmlspecialchars($message['messagetext'], ENT_QUOTES, 'UTF-8')?></td>
    </tr>
    <?php endforeach; ?>
</table>