
<?php
session_start();
$pageTitle="listes des sections";
require_once "../classes/autoloader.php";
require_once "../fragments/header.php";
require_once "../fragments/navbar.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$sections = Section::getAll();
?>
<div class="alert alert-secondary" style = "margin-top:10px" role="alert">
           <h2>Liste des sections</h2>
</div>
    <a class="btn btn-secondary" id="copy" onclick= <?="copy('sections')"?> role="button">Copy</a>
    <a class="btn btn-secondary" href="../exports/export_csv_stu.php" role="button">CSV</a>
    <a class="btn btn-secondary" href="../exports/export_pdf_stu.php" role="button">PDF</a>
    <a class="btn btn-secondary" href="../exports/export_excel_stu.php" role="button">Excel</a>
    <table id="sectionsTable" class="display">
        <thead class="table-secondary" style = "border-bottom:black;">
            <tr>
                <th>ID</th>
                <th>DESIGNATION</th>
                <th>DESCRIPTION</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sections as $section) : ?>
                <tr>
                    <td><?= htmlspecialchars($section['id']); ?></td>
                    <td><?= htmlspecialchars($section['designation']); ?></td>
                    <td><?= htmlspecialchars($section['description']); ?></td>
                    <td scope="row">
                        <a href=<?="listeEtudiantsSection.php?id=".$section['id']?>><svg fill="#2F88FF" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 317.109 317.109" xml:space="preserve" stroke="#2F88FF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M102.109,53.555h200c8.284,0,15-6.716,15-15s-6.716-15-15-15h-200c-8.284,0-15,6.716-15,15S93.825,53.555,102.109,53.555z"></path> <path d="M302.109,143.555h-200c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h200c8.284,0,15-6.716,15-15 C317.109,150.27,310.394,143.555,302.109,143.555z"></path> <path d="M302.109,263.555h-200c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h200c8.284,0,15-6.716,15-15 C317.109,270.271,310.394,263.555,302.109,263.555z"></path> <path d="M17.826,49.036V86.6c0,4.074,3.32,7.146,7.724,7.146c4.33,0,7.721-3.139,7.721-7.146V30.426 c0-3.96-3.247-7.063-7.392-7.063c-3.646,0-5.47,2.446-6.069,3.25c-0.025,0.034-0.05,0.068-0.075,0.104l-6.526,9.232 c-1.267,1.378-2.394,3.582-2.394,5.696C10.814,45.675,13.948,48.962,17.826,49.036z"></path> <path d="M7.63,193.746h29.406c3.849,0,6.981-3.391,6.981-7.559c0-4.124-3.131-7.479-6.981-7.479H15.684v-0.123 c0-2.245,5.148-5.878,9.285-8.797c8.229-5.807,18.47-13.033,18.47-25.565c0-11.893-9.216-20.86-21.438-20.86 c-11.703,0-20.527,8.044-20.527,18.711c0,6.19,4.029,8.387,7.479,8.387c4.938,0,7.889-3.677,7.889-7.23 c0-2.209,0.568-4.745,4.994-4.745c5.979,0,6.151,5.298,6.151,5.902c0,4.762-6.18,9.214-12.157,13.519 c-7.388,5.321-15.762,11.353-15.762,20.68v8.012C0.067,190.874,3.978,193.746,7.63,193.746z"></path> <path d="M42.446,242.783c0-12.342-7.288-19.42-19.994-19.42c-16.66,0-21.062,11.898-21.062,18.189c0,7.324,5.445,8.115,7.786,8.115 c4.559,0,7.621-3.063,7.621-7.622c0-1.754,0.624-3.767,5.487-3.767c3.495,0,4.918,0.504,4.918,5.568 c0,4.948-1.062,5.487-5.245,5.487c-4.018,0-7.047,3.171-7.047,7.375c0,4.159,3.066,7.296,7.131,7.296 c5.525,0,6.635,2.256,6.635,5.897v1.559c0,6.126-2.389,7.287-6.798,7.287c-6.083,0-6.556-3.132-6.556-4.092 c0-3.631-2.407-7.295-7.785-7.295c-4.72,0-7.538,2.941-7.538,7.869c0,8.976,7.696,18.516,21.958,18.516 c13.854,0,22.126-8.331,22.126-22.285v-1.559c0-5.721-1.83-10.465-5.264-13.876C41.171,252.622,42.446,248.081,42.446,242.783z"></path> </g> </g></svg></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php
 include_once '../fragments/footer.php';
?>