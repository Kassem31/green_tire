<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Edit Inspection Transaction</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('inspection-transactions.update', $inspectionTransaction)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group mb-4">
                            <label for="barcode">Barcode:</label>
                            <div class="input-group">
                                <input id="barcode" type="text" class="form-control <?php $__errorArgs = ['barcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="barcode" value="<?php echo e(old('barcode', $inspectionTransaction->barcode)); ?>" required autofocus>
                                <button class="btn btn-outline-secondary" type="button" id="validate_barcode">
                                    <i class="fas fa-search"></i> <?php echo e(__('Validate')); ?>

                                </button>
                            </div>
                            <small class="form-text text-muted"><?php echo e(__('Enter barcode and click validate or press Enter')); ?></small>
                            <div id="barcode_feedback" class="invalid-feedback d-none"></div>
                            <?php $__errorArgs = ['barcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-4">
                            <label>Tire Type:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <?php $__currentLoopData = $tireTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tireType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tire_type_id"
                                            id="tire_type_<?php echo e($tireType->id); ?>" value="<?php echo e($tireType->id); ?>"
                                            <?php echo e(old('tire_type_id', $inspectionTransaction->tire_type_id) == $tireType->id ? 'checked' : ''); ?> required>
                                        <label class="form-check-label" for="tire_type_<?php echo e($tireType->id); ?>">
                                            <?php echo e(__($tireType->name_en)); ?>

                                        </label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php $__errorArgs = ['tire_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-4">
                            <label for="machine">Machine:</label>
                            <input id="machine" type="text" class="form-control <?php $__errorArgs = ['machine'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="machine" value="<?php echo e(old('machine', $inspectionTransaction->machine)); ?>">
                            <?php $__errorArgs = ['machine'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-4">
                            <label for="operator_name">Operator Name:</label>
                            <input id="operator_name" type="text" class="form-control <?php $__errorArgs = ['operator_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="operator_name" value="<?php echo e(old('operator_name', $inspectionTransaction->operator_name)); ?>">
                            <?php $__errorArgs = ['operator_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-4">
                            <label for="operator_code">Operator Code:</label>
                            <input id="operator_code" type="text" class="form-control <?php $__errorArgs = ['operator_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="operator_code" value="<?php echo e(old('operator_code', $inspectionTransaction->operator_code)); ?>">
                            <?php $__errorArgs = ['operator_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-4">
                            <label>Observations:</label>
                            <div class="input-group mb-3">
                                <select id="observation_select" class="form-control">
                                    <option value=""><?php echo e(__('Select Observation')); ?></option>
                                    <?php $__currentLoopData = $observations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $observation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($observation->id); ?>" data-name="<?php echo e($observation->name_en); ?> (<?php echo e($observation->name_ar); ?>)">
                                            <?php echo e($observation->name_en); ?> (<?php echo e($observation->name_ar); ?>)
                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <button class="btn btn-primary" type="button" id="add_observation">+</button>
                            </div>
                            <div id="selected_observations_container" class="border p-3 rounded mb-3">
                                <div id="selected_observations_list" class="d-flex flex-wrap gap-2">
                                    <!-- Selected observations will be added here -->
                                </div>
                            </div>
                            <div id="observations_error" class="invalid-feedback d-none">
                                <?php echo e(__('This observation has already been added.')); ?>

                            </div>
                            <?php $__errorArgs = ['observations'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-4" id="decision_row" style="display: none;">
                            <label>Decision:</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="decision" id="decision_repair"
                                        value="Repair" <?php echo e(old('decision', $inspectionTransaction->decision) == 'Repair' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="decision_repair"><?php echo e(__('Repair')); ?></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="decision" id="decision_scrap"
                                        value="Scrap" <?php echo e(old('decision', $inspectionTransaction->decision) == 'Scrap' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="decision_scrap"><?php echo e(__('Scrap')); ?></label>
                                </div>
                            </div>
                            <?php $__errorArgs = ['decision'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-4">
                            <a href="<?php echo e(route('inspection-transactions.index')); ?>" class="btn btn-secondary">Back to List</a>
                            <button type="submit" class="btn btn-primary">Update Transaction</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Focus on barcode field initially
        document.getElementById('barcode').focus();

        // Barcode validation
        const barcodeInput = document.getElementById('barcode');
        const validateBarcodeBtn = document.getElementById('validate_barcode');
        const barcodeFeedback = document.getElementById('barcode_feedback');

        // Add barcode validation functionality if needed
        if (validateBarcodeBtn) {
            const validateBarcode = () => {
                const barcode = barcodeInput.value.trim();
                if (!barcode) {
                    showBarcodeFeedback('Please enter a barcode', 'error');
                    return;
                }

                // You can add AJAX validation here if needed
                // For now, just showing a success message
                showBarcodeFeedback('Barcode is valid', 'success');
            };

            validateBarcodeBtn.addEventListener('click', validateBarcode);
            barcodeInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    validateBarcode();
                }
            });
        }

        function showBarcodeFeedback(message, type) {
            barcodeFeedback.textContent = message;
            barcodeFeedback.classList.remove('d-none', 'text-danger', 'text-success');
            barcodeFeedback.classList.add('d-block');

            if (type === 'error') {
                barcodeFeedback.classList.add('text-danger');
            } else {
                barcodeFeedback.classList.add('text-success');
            }

            setTimeout(() => {
                barcodeFeedback.classList.remove('d-block');
                barcodeFeedback.classList.add('d-none');
            }, 3000);
        }

        // Observation selection functionality
        const observationSelect = document.getElementById('observation_select');
        const addObservationBtn = document.getElementById('add_observation');
        const selectedObservationsListDiv = document.getElementById('selected_observations_list');
        const observationsError = document.getElementById('observations_error');
        const selectedObservationsContainer = document.getElementById('selected_observations_container');

        // Helper to check if observation is already added
        function isObservationAdded(id) {
            return !!selectedObservationsListDiv.querySelector(`input[name="observations[]"][value="${id}"]`);
        }

        // Add observation to the list div
        function addObservationToDiv(id, name) {
            const wrapper = document.createElement('div');
            wrapper.className = 'badge bg-secondary me-2 mb-2 d-flex align-items-center';
            wrapper.style.padding = '0.5em 0.75em';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'observations[]';
            input.value = id;
            wrapper.appendChild(input);

            const span = document.createElement('span');
            span.textContent = name;
            span.className = 'me-2';
            wrapper.appendChild(span);

            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.innerHTML = '&times;';
            removeBtn.style.border = 'none';
            removeBtn.style.background = 'none';
            removeBtn.style.color = 'white';
            removeBtn.style.cursor = 'pointer';
            removeBtn.style.fontSize = '1.1em';
            removeBtn.style.lineHeight = '1';
            removeBtn.style.padding = '0 0.2em';

            removeBtn.onclick = function() {
                wrapper.remove();
                updateContainerVisibility();
            };
            wrapper.appendChild(removeBtn);

            selectedObservationsListDiv.appendChild(wrapper);
            updateContainerVisibility();
        }

        // Show error helper
        function showError(message) {
            observationsError.textContent = message;
            observationsError.classList.remove('d-none');
            observationsError.classList.add('d-block');
            setTimeout(() => {
                observationsError.classList.remove('d-block');
                observationsError.classList.add('d-none');
            }, 2000);
        }

        // Update container visibility based on content
        function updateContainerVisibility() {
            if (selectedObservationsListDiv.children.length === 0) {
                selectedObservationsContainer.style.display = 'none';
            } else {
                selectedObservationsContainer.style.display = '';
            }
        }

        // Add observation button click
        addObservationBtn.addEventListener('click', function() {
            const selectedOption = observationSelect.options[observationSelect.selectedIndex];
            const observationId = observationSelect.value;
            if (!observationId) {
                showError('Please select an observation first');
                return;
            }
            if (isObservationAdded(observationId)) {
                showError('This observation has already been added');
                return;
            }
            const observationName = selectedOption.dataset.name;
            addObservationToDiv(observationId, observationName);
            observationSelect.value = '';
        });

        // Decision visibility logic based on tire type
        const tireTypeRadios = document.querySelectorAll('input[name="tire_type_id"]');
        const decisionRow = document.getElementById('decision_row');
        const decisionRadios = document.querySelectorAll('input[name="decision"]');

        function toggleDecisionVisibility() {
            const selectedTireType = document.querySelector('input[name="tire_type_id"]:checked');
            // Only show decision options for Green Tire type (ID 2)
            const greenTireId = '2'; // Green Tire ID
            const isGreenTire = selectedTireType && selectedTireType.value === greenTireId;

            if (isGreenTire) {
                decisionRow.style.display = ''; // Show the row
                decisionRadios.forEach(radio => radio.required = true);
            } else {
                decisionRow.style.display = 'none'; // Hide the row
                decisionRadios.forEach(radio => radio.required = false);

                // If hiding, also uncheck the decision radios to avoid submitting a hidden value
                decisionRadios.forEach(radio => radio.checked = false);
            }
        }

        tireTypeRadios.forEach(radio => {
            radio.addEventListener('change', toggleDecisionVisibility);
        });

        // Load existing observations
        const initialObservations = <?php echo json_encode(old('observations', $selectedObservations ?? []), 512) ?>;
        const allObservationsData = <?php echo json_encode($observations->keyBy('id'), 15, 512) ?>;

        initialObservations.forEach(observationId => {
            const idStr = String(observationId);
            if (allObservationsData[idStr]) {
                const obsData = allObservationsData[idStr];
                if (!isObservationAdded(idStr)) {
                    addObservationToDiv(idStr, `${obsData.name_en} (${obsData.name_ar})`);
                }
            }
        });

        // Initial setup
        updateContainerVisibility();
        toggleDecisionVisibility();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\green-tire\resources\views/inspection-transactions/edit.blade.php ENDPATH**/ ?>