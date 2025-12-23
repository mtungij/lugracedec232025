<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>


    <div id="main-content">
    <div class="container-fluid">

    <!-- Profile Card -->
    <div class="col-12 ">
      <div class="card shadow overflow-hidden">
        <div class="bg-info bg-gradient" style="height:140px;"></div>

        <div class="card-body position-relative">
          <!-- <div class="position-absolute top-0 start-0 translate-middle-y ms-4">
            <img src="<?= base_url('assets/img/customer21.png') ?>"
                 class="rounded-circle border border-4 border-white shadow"
                 width="90" height="90" alt="Customer">
          </div> -->

          <div class="mt-5 ms-2">
            <h3 class="text-uppercase fw-bold">
        <?= htmlspecialchars($employee->empl_name ?? 'Unknown Employee', ENT_QUOTES, 'UTF-8') ?>

            </h3>
            <p class="text-muted mb-0">@daddasoft</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Permissions Form -->
    <div class="col-12 ">
      <form method="post" action="<?= base_url('admin/save_permissions/' . $employee_id); ?>">
        <input type="hidden" name="employee_id" value="<?= $employee_id ?>">

        <div class="card shadow-sm">
          <!-- Card Header -->
          <div class="card-header d-flex justify-content-between align-items-center">
            <span class="fw-bold text-uppercase text-secondary">
              Management System Access
            </span>

            <button type="button"
                    class="btn btn-primary btn-sm"
                    onclick="toggleCheckboxes(this)">
              Select All
            </button>
          </div>

          <!-- Card Body -->
          <div class="card-body">

            <?php foreach ($grouped_links as $group => $links): ?>
              <h5 class="fw-semibold mt-4 mb-3 text-secondary">
                <?= htmlspecialchars($group) ?>
              </h5>

              <div class="row g-2">
                <?php foreach ($links as $link): ?>
                  <?php $isChecked = in_array($link->link_id, $employee_links) ? 'checked' : ''; ?>

                  <div class="col-md-6">
                    <label class="form-check border rounded p-3 w-100">
                      <input
                        class="form-check-input permission-checkbox"
                        type="checkbox"
                        name="permissions[]"
                        value="<?= $link->link_id ?>"
                        <?= $isChecked ?>
                      >
                      <span class="form-check-label ms-2">
                        <?= htmlspecialchars($link->link_name) ?>
                      </span>
                    </label>
                  </div>

                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>

            <div class="mt-4 text-end">
              <button type="submit" class="btn btn-success px-4">
                Update Permissions
              </button>
            </div>

          </div>
        </div>
      </form>
    </div>

  </div>
</div>

<script>
function toggleCheckboxes(button) {
  const checkboxes = document.querySelectorAll('.permission-checkbox');
  const allChecked = [...checkboxes].every(cb => cb.checked);

  checkboxes.forEach(cb => cb.checked = !allChecked);
  button.textContent = allChecked ? 'Select All' : 'Deselect All';
}
</script>

<?php include('incs/footer.php'); ?>
