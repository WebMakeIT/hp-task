<!doctype html>
<html>
<head>
    <title>Last transactions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-1/2 mt-8 mx-auto">
        <h1 class="text-3xl font-bold text-center underline">
            Transactions
        </h1>
        <?php if(count($customers) > 0): ?>
            <a href="/1">Customer 1</a> | <a href="/2">Customer 2</a>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="py-3 px-6">ID</th>
                        <th class="py-3 px-6">Date</th>
                        <th class="py-3 px-6">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="py-3 px-6"><?php echo e($customer['id']); ?></td>
                            <td class="py-3 px-6"><?php echo e($customer['date']); ?></td>
                            <td class="py-3 px-6"><?php echo e($customer['value']); ?> <?php echo e($customer['currency']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>            
            </table>
        <?php else: ?>
            <h3 class="text-lg">
                No data in table
            </h3>
        <?php endif; ?>
    </div>
  
</body>
</html><?php /**PATH /var/www/html/resources/views/index.blade.php ENDPATH**/ ?>