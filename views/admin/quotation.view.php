<?php include base_path("views/partials/head.php") ?>

<?php include base_path("views/partials/adminnav.php") ?>

<section class="relative w-full h-full">
    <div class="w-full mx-auto ">
        <div class="h-[80vh] overflow-y-scroll border rounded-md 2xl:mx-16 md:mx-5 mx-1">
            <table id="table" class="table-auto w-full text-nowrap">
                <!-- table head  -->
                <tr class="sticky top-0 z-10 border bg-third text-white">
                    <td class="w-16 text-center border border-gray-300 p-1">Id</td>
                    <td class="w-56 text-center border border-gray-300 p-1">name</td>
                    <td class="w-56 text-center border border-gray-300 p-1">phone</td>
                    <td class="w-56 text-center border border-gray-300 p-1">project</td>
                    <td class="w-56 text-center border border-gray-300 p-1">business</td>
                    <td class="w-56 text-center border border-gray-300 p-1">message</td>
                    <td class="w-36 text-center border border-gray-300 p-1">budget</td>
                    <td class="w-36 text-center border border-gray-300 p-1">requested_at</td>
                    <td class="w-36 text-center border border-gray-300 p-1">Actions</td>
                </tr>
                <tbody class="">
                    <?php foreach ($quotations as $quotation) : ?>
                        <tr class="quotation-table-row">
                            <td class="quotation-id border border-gray-300 p-2"><?= $quotation['id'] ?></td>
                            <td class="project-customer border border-gray-300 p-2"> <?= $quotation['name'] ?></td>
                            <td class="project-location border border-gray-300 p-2"><?= $quotation['phone'] ?></td>
                            <td class="project-service border border-gray-300 p-2"><?= $quotation['project'] ?></td>
                            <td class="project-categories border border-gray-300 p-2"><?= $quotation['business'] ?></td>
                            <td class="project-photo border border-gray-300 p-2"><?= $quotation['message'] ?></td>
                            <td class="border border-gray-300 p-2 text-xs"><?= $quotation['budget'] ?></td>
                            <td class="border border-gray-300 p-2 text-xs"><?= $quotation['requested_at'] ?></td>
                            <td class="border border-gray-300 p-2 text-center">
                                <div class="flex justify-evenly md:gap-2 gap-5">
                                    <a href="/quotation/delete?id=<?= $quotation['id'] ?>" class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<?php include base_path("views/partials/adminfooter.php") ?>