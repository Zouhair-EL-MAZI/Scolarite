<!-- Form Section: Type-Specific Fields (Dynamic) -->
<section id="type-specific-section" class="bg-surface-container-low p-1 rounded-xl">
    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm">
        <div class="flex items-start gap-4 mb-8">
            <div class="w-12 h-12 bg-blue-50 text-secondary rounded-xl flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined">edit_note</span>
            </div>
            <div>
                <h3 class="text-xl font-headline font-bold text-primary">{{ __('portal.requests.create.specifications.title') }}</h3>
                <p class="text-sm text-on-surface-variant">{{ __('portal.requests.create.specifications.description') }}</p>
            </div>
        </div>

        <div id="type-specific-fields" class="space-y-6">
            <!-- Transcript Fields -->
            <div class="type-fields hidden space-y-6" data-type="transcript">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.delivery_method') }}</label>
                    <select name="delivery_method"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 appearance-none focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled>
                        <option value="">{{ __('portal.requests.create.specifications.placeholders.delivery_method') }}</option>
                        <option value="email">{{ __('portal.requests.create.specifications.options.delivery_method.email') }}</option>
                        <option value="pickup">{{ __('portal.requests.create.specifications.options.delivery_method.pickup') }}</option>
                        <option value="mail">{{ __('portal.requests.create.specifications.options.delivery_method.mail') }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.number_of_copies') }}</label>
                    <input type="number" name="number_of_copies" min="1" max="10" value="1"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
            </div>

            <!-- Transfer Fields -->
            <div class="type-fields hidden space-y-6" data-type="transfer">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.destination_program') }}</label>
                    <input type="text" name="destination_program" placeholder="{{ __('portal.requests.create.specifications.placeholders.destination_program') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.reason_for_transfer') }}</label>
                    <textarea name="reason" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.reason_for_transfer') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Withdrawal Fields -->
            <div class="type-fields hidden space-y-6" data-type="withdrawal">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.course_code') }}</label>
                    <input type="text" name="course_code" placeholder="{{ __('portal.requests.create.specifications.placeholders.course_code') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.course_name') }}</label>
                    <input type="text" name="course_name" placeholder="{{ __('portal.requests.create.specifications.placeholders.course_name') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.reason') }}</label>
                    <textarea name="reason" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.withdrawal_reason') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Leave Fields -->
            <div class="type-fields hidden space-y-6" data-type="leave">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.leave_type') }}</label>
                    <select name="leave_type"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 appearance-none focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled>
                        <option value="">{{ __('portal.requests.create.specifications.placeholders.leave_type') }}</option>
                        <option value="medical">{{ __('portal.requests.create.specifications.options.leave_type.medical') }}</option>
                        <option value="personal">{{ __('portal.requests.create.specifications.options.leave_type.personal') }}</option>
                        <option value="academic">{{ __('portal.requests.create.specifications.options.leave_type.academic') }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.start_date') }}</label>
                    <input type="date" name="start_date"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.end_date') }}</label>
                    <input type="date" name="end_date"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.reason') }}</label>
                    <textarea name="reason" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.leave_reason') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Appeal Fields -->
            <div class="type-fields hidden space-y-6" data-type="appeal">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.course_code') }}</label>
                    <input type="text" name="course_code" placeholder="{{ __('portal.requests.create.specifications.placeholders.course_code') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.grade_received') }}</label>
                    <input type="text" name="grade_received" placeholder="{{ __('portal.requests.create.specifications.placeholders.grade_received') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.reason_for_appeal') }}</label>
                    <textarea name="reason" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.appeal_reason') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Extension Fields -->
            <div class="type-fields hidden space-y-6" data-type="extension">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.assignment_name') }}</label>
                    <input type="text" name="assignment_name" placeholder="{{ __('portal.requests.create.specifications.placeholders.assignment_name') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.requested_days') }}</label>
                    <input type="number" name="requested_days" min="1" max="14"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.reason') }}</label>
                    <textarea name="reason" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.extension_reason') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Accommodation Fields -->
            <div class="type-fields hidden space-y-6" data-type="accommodation">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.accommodation_type') }}</label>
                    <input type="text" name="accommodation_type" placeholder="{{ __('portal.requests.create.specifications.placeholders.accommodation_type') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div class="flex items-center gap-3 p-4 bg-surface-container-high/40 rounded-lg">
                    <input type="checkbox" id="supporting_docs" name="supporting_documentation"
                        class="w-5 h-5 rounded cursor-pointer disabled:opacity-50" disabled />
                    <label for="supporting_docs"
                        class="text-sm font-body text-on-surface cursor-pointer disabled:opacity-50">{{ __('portal.requests.create.specifications.fields.supporting_documentation') }}</label>
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.description') }}</label>
                    <textarea name="description" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.accommodation_description') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Enrollment Certificate Fields -->
            <div class="type-fields hidden space-y-6" data-type="enrollment_certificate">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.delivery_method') }}</label>
                    <select name="delivery_method"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 appearance-none focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled>
                        <option value="">{{ __('portal.requests.create.specifications.placeholders.delivery_method') }}</option>
                        <option value="email">{{ __('portal.requests.create.specifications.options.delivery_method.email') }}</option>
                        <option value="pickup">{{ __('portal.requests.create.specifications.options.delivery_method.pickup') }}</option>
                        <option value="mail">{{ __('portal.requests.create.specifications.options.delivery_method.mail') }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.number_of_copies') }}</label>
                    <input type="number" name="number_of_copies" min="1" max="10" value="1"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
            </div>

            <!-- Diploma Fields -->
            <div class="type-fields hidden space-y-6" data-type="diploma">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.delivery_method') }}</label>
                    <select name="delivery_method"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 appearance-none focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled>
                        <option value="">{{ __('portal.requests.create.specifications.placeholders.delivery_method') }}</option>
                        <option value="email">{{ __('portal.requests.create.specifications.options.delivery_method.email') }}</option>
                        <option value="pickup">{{ __('portal.requests.create.specifications.options.delivery_method.pickup') }}</option>
                        <option value="mail">{{ __('portal.requests.create.specifications.options.delivery_method.mail') }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.number_of_copies') }}</label>
                    <input type="number" name="number_of_copies" min="1" max="5" value="1"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
            </div>

            <!-- Student Card Fields -->
            <div class="type-fields hidden space-y-6" data-type="student_card">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.card_request_type') }}</label>
                    <select name="card_type"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 appearance-none focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled>
                        <option value="">{{ __('portal.requests.create.specifications.placeholders.card_type') }}</option>
                        <option value="new">{{ __('portal.requests.create.specifications.options.card_type.new') }}</option>
                        <option value="replacement">{{ __('portal.requests.create.specifications.options.card_type.replacement') }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.reason') }}</label>
                    <textarea name="reason" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.student_card_reason') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Financial Aid Fields -->
            <div class="type-fields hidden space-y-6" data-type="financial_aid">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.aid_type') }}</label>
                    <select name="aid_type"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 appearance-none focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled>
                        <option value="">{{ __('portal.requests.create.specifications.placeholders.aid_type') }}</option>
                        <option value="scholarship">{{ __('portal.requests.create.specifications.options.aid_type.scholarship') }}</option>
                        <option value="loan">{{ __('portal.requests.create.specifications.options.aid_type.loan') }}</option>
                        <option value="bursary">{{ __('portal.requests.create.specifications.options.aid_type.bursary') }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.reason') }}</label>
                    <textarea name="reason" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.financial_aid_reason') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>

            <!-- Other Request Fields -->
            <div class="type-fields hidden space-y-6" data-type="other">
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.subject') }}</label>
                    <input type="text" name="subject" placeholder="{{ __('portal.requests.create.specifications.placeholders.subject') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg py-3 px-4 focus:ring-2 focus:ring-secondary transition-all font-body text-on-surface disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled />
                </div>
                <div>
                    <label class="block text-sm font-headline font-bold text-primary mb-3">{{ __('portal.requests.create.specifications.fields.description') }}</label>
                    <textarea name="description" rows="4" placeholder="{{ __('portal.requests.create.specifications.placeholders.description') }}"
                        class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none disabled:bg-outline-variant/20 disabled:text-on-surface-variant"
                        disabled></textarea>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const typeRadios = document.querySelectorAll('input[name="type"]');

    function showTypeFields(type) {
        // Disable and hide all type-specific fields
        document.querySelectorAll('.type-fields').forEach(el => {
            el.classList.add('hidden');
            el.querySelectorAll('input, select, textarea').forEach(field => {
                field.disabled = true;
            });
        });

        // Enable and show selected type fields
        if (type) {
            const selectedFields = document.querySelector(`.type-fields[data-type="${type}"]`);
            if (selectedFields) {
                selectedFields.classList.remove('hidden');
                selectedFields.querySelectorAll('input, select, textarea').forEach(field => {
                    field.disabled = false;
                });
            }
        }
    }

    // Show fields on load if type was previously selected
    const checkedRadio = document.querySelector('input[name="type"]:checked');
    if (checkedRadio && checkedRadio.value) {
        showTypeFields(checkedRadio.value);
    }

    // Show/hide fields on change
    typeRadios.forEach(radio => {
        radio.addEventListener('change', (e) => {
            showTypeFields(e.target.value);
        });
    });
</script>
