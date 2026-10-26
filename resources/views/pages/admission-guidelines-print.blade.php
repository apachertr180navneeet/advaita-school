<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Guidelines – Advaita School of Excellence, Parbhani</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f1f5f9;
            color: #0f172a;
            line-height: 1.5;
            padding: 30px 15px;
        }
        .print-actions-bar {
            max-width: 820px;
            margin: 0 auto 20px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            padding: 12px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }
        .btn-print {
            background: #083B7A;
            color: #ffffff;
            border: none;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-download-pdf {
            background: #F37021;
            color: #ffffff;
            border: none;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .guidelines-sheet {
            max-width: 820px;
            margin: 0 auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border-top: 6px solid #083B7A;
        }
        .sheet-header {
            border-bottom: 2px solid #F37021;
            padding-bottom: 16px;
            margin-bottom: 24px;
            text-align: center;
        }
        .school-title {
            font-size: 24px;
            font-weight: 800;
            color: #083B7A;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .school-sub {
            font-size: 13px;
            color: #475569;
            margin-top: 4px;
        }
        .doc-title-bar {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 10px 16px;
            border-radius: 6px;
            text-align: center;
            margin-bottom: 24px;
        }
        .doc-title {
            font-size: 15px;
            font-weight: 700;
            color: #083B7A;
            text-transform: uppercase;
        }
        .doc-subtitle {
            font-size: 12px;
            color: #64748b;
        }
        .section-title {
            font-size: 14px;
            font-weight: 700;
            color: #083B7A;
            text-transform: uppercase;
            border-bottom: 1.5px solid #e2e8f0;
            padding-bottom: 4px;
            margin: 20px 0 12px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .guidelines-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            margin-bottom: 14px;
        }
        .guidelines-table th {
            background: #083B7A;
            color: #ffffff;
            text-align: left;
            padding: 8px 12px;
            font-weight: 600;
        }
        .guidelines-table td {
            padding: 8px 12px;
            border: 1px solid #e2e8f0;
            color: #1e293b;
        }
        .guidelines-table tr:nth-child(even) td {
            background: #f8fafc;
        }
        .disclaimer-box {
            background: #fffbeb;
            border-left: 4px solid #f59e0b;
            padding: 10px 14px;
            font-size: 11.5px;
            color: #92400e;
            border-radius: 0 4px 4px 0;
            margin-bottom: 16px;
        }
        .checklist-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 8px;
            font-size: 12px;
            margin-bottom: 16px;
        }
        .checklist-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 6px 10px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
        }
        .checklist-badge {
            background: #083B7A;
            color: #ffffff;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 3px;
        }
        .step-sequence {
            margin-bottom: 16px;
        }
        .step-row {
            display: flex;
            gap: 12px;
            margin-bottom: 8px;
            font-size: 12px;
        }
        .step-num {
            background: #F37021;
            color: #ffffff;
            font-weight: 700;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            flex-shrink: 0;
            font-size: 11px;
        }
        .eligibility-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
            border-radius: 4px;
            margin-bottom: 8px;
            font-size: 12px;
        }
        .eligibility-box strong {
            color: #083B7A;
        }
        .contact-box {
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            padding: 12px 16px;
            border-radius: 6px;
            font-size: 12px;
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }
        .sheet-footer {
            margin-top: 30px;
            border-top: 1px solid #e2e8f0;
            padding-top: 10px;
            font-size: 11px;
            color: #64748b;
            display: flex;
            justify-content: space-between;
        }

        @media print {
            body {
                background: #ffffff;
                padding: 0;
            }
            .print-actions-bar {
                display: none;
            }
            .guidelines-sheet {
                box-shadow: none;
                border-top: none;
                padding: 15px;
                max-width: 100%;
            }
            .guidelines-table th {
                background: #083B7A !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            .disclaimer-box {
                background: #fffbeb !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>

    <div class="print-actions-bar">
        <div>
            <a href="{{ route('admission-guidelines') }}" style="color: #083B7A; font-weight: 600; text-decoration: none;">
                <i class="fa-solid fa-arrow-left me-1"></i> Back to Guidelines Page
            </a>
        </div>
        <div style="display: flex; gap: 10px;">
            <button type="button" onclick="window.print()" class="btn-print">
                <i class="fa-solid fa-print"></i> Print Document
            </button>
            <a href="{{ route('admission-guidelines.download') }}" class="btn-download-pdf">
                <i class="fa-solid fa-file-pdf"></i> Download PDF
            </a>
        </div>
    </div>

    <div class="guidelines-sheet">
        <!-- Sheet Header -->
        <div class="sheet-header">
            <h1 class="school-title">Advaita School of Excellence, Parbhani</h1>
            <p class="school-sub">
                Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra – 431401 | CBSE Affiliation No. 1130920
            </p>
        </div>

        <div class="doc-title-bar">
            <div class="doc-title">Official Admission Guidelines &amp; Eligibility Protocol</div>
            <div class="doc-subtitle">Applicable Classes: Pre-Primary (Nursery, Jr. KG, Sr. KG) to Grade X | Academic Session {{ $academicYear ?? '2026–27' }}</div>
        </div>

        <!-- Section A: Age Criteria -->
        <h2 class="section-title"><i class="fa-solid fa-calendar-check text-orange"></i> Section A: Age Criteria &amp; Phased Implementation</h2>
        <table class="guidelines-table">
            <thead>
                <tr>
                    <th style="width: 25%;">Class</th>
                    <th style="width: 35%;">Minimum Age / Eligibility</th>
                    <th style="width: 40%;">Phased Implementation Schedule</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nursery</strong></td>
                    <td>Minimum 3 years</td>
                    <td>Academic Year 2027–28</td>
                </tr>
                <tr>
                    <td><strong>Junior KG</strong></td>
                    <td>Minimum 4 years</td>
                    <td>Academic Year 2028–29</td>
                </tr>
                <tr>
                    <td><strong>Senior KG</strong></td>
                    <td>Minimum 5 years</td>
                    <td>Academic Year 2029–30</td>
                </tr>
                <tr>
                    <td><strong>Grade I</strong></td>
                    <td>Minimum 6 years</td>
                    <td>Academic Year 2030–31</td>
                </tr>
                <tr>
                    <td><strong>Grades II–VIII</strong></td>
                    <td>As per applicable Maharashtra Government rules and previous class completion</td>
                    <td>Currently Enrolling</td>
                </tr>
                <tr>
                    <td><strong>Grades IX–X</strong></td>
                    <td>As per applicable CBSE admission rules and eligibility requirements</td>
                    <td>Currently Enrolling</td>
                </tr>
            </tbody>
        </table>

        <div class="disclaimer-box">
            <strong>Prescribed Age Cut-Off Date: {{ $cutoffDate ?? '30 June' }}.</strong>
            Applicable rules for the relevant academic year must be followed. The age criteria and phased implementation schedule are subject to applicable government notifications (Government of Maharashtra School Education Department) and school policy.
        </div>

        <!-- Section B: Documents Required -->
        <h2 class="section-title"><i class="fa-solid fa-file-shield text-purple"></i> Section B: Documents Required Checklist</h2>
        <div class="checklist-grid">
            <div class="checklist-item">
                <span class="checklist-badge">1</span>
                <div><strong>Birth Certificate:</strong> Official certificate issued by Municipal Corporation or Gram Panchayat.</div>
            </div>
            <div class="checklist-item">
                <span class="checklist-badge">2</span>
                <div><strong>Student's Passport-size Photographs:</strong> 3 to 5 recent identical color photographs.</div>
            </div>
            <div class="checklist-item">
                <span class="checklist-badge">3</span>
                <div><strong>Aadhaar Details, Where Applicable:</strong> Photocopy of student's UIDAI Aadhaar card.</div>
            </div>
            <div class="checklist-item">
                <span class="checklist-badge">4</span>
                <div><strong>Previous Class Report Card:</strong> Annual mark sheet demonstrating successful class completion.</div>
            </div>
            <div class="checklist-item">
                <span class="checklist-badge">5</span>
                <div><strong>Transfer Certificate (TC), Where Applicable:</strong> Original TC counter-signed by competent authority.</div>
            </div>
            <div class="checklist-item">
                <span class="checklist-badge">6</span>
                <div><strong>Parent's Identity and Address Proof, Where Required:</strong> Aadhaar / Passport / Electricity Bill / Ration Card.</div>
            </div>
            <div class="checklist-item">
                <span class="checklist-badge">7</span>
                <div><strong>Additional Documents:</strong> Caste Certificate, UDISE number, or special medical records if applicable.</div>
            </div>
        </div>

        <!-- Section C: Admission Procedure -->
        <h2 class="section-title"><i class="fa-solid fa-list-ol text-green"></i> Section C: Admission Procedure (5-Step Sequence)</h2>
        <div class="step-sequence">
            <div class="step-row">
                <div class="step-num">1</div>
                <div><strong>Submit Online Enquiry or Registration Form:</strong> Complete applicant and academic details online or at the school counter.</div>
            </div>
            <div class="step-row">
                <div class="step-num">2</div>
                <div><strong>Submit the Required Documents:</strong> Furnish authentic photocopies with originals for desk verification.</div>
            </div>
            <div class="step-row">
                <div class="step-num">3</div>
                <div><strong>Attend Interaction / Assessment:</strong> Friendly parent-ward interaction or grade-appropriate assessment.</div>
            </div>
            <div class="step-row">
                <div class="step-num">4</div>
                <div><strong>Complete Formalities and Fee Payment:</strong> Finalize admission forms and term/annual fee payment against official receipt.</div>
            </div>
            <div class="step-row">
                <div class="step-num">5</div>
                <div><strong>Receive Admission Confirmation:</strong> Allotment of Student ID, section, and commencement schedule.</div>
            </div>
        </div>

        <!-- Section D: Class Eligibility -->
        <h2 class="section-title"><i class="fa-solid fa-shield-halved text-blue"></i> Section D: Class Eligibility &amp; CBSE Rules</h2>
        <div class="eligibility-box">
            <strong>Grades II–VIII:</strong> Successful completion of the previous class, subject to applicable rules.
        </div>
        <div class="eligibility-box">
            <strong>Grade IX:</strong> Successful completion of Grade VIII from a recognised school.
        </div>
        <div class="eligibility-box" style="border-left: 3px solid #dc2626;">
            <strong>Grade X:</strong> Direct admission is not permitted except under specific exceptions prescribed by CBSE (e.g. transfer of parent in government/defence service or certified relocation).
        </div>

        <!-- Section E: Important Instructions -->
        <h2 class="section-title"><i class="fa-solid fa-circle-exclamation text-orange"></i> Section E: Important Instructions</h2>
        <ul style="font-size: 11.5px; padding-left: 20px; line-height: 1.6; color: #334155;">
            <li>All information and documents must be accurate and authentic.</li>
            <li>Registration does not guarantee admission.</li>
            <li>Admissions are subject to seat availability and applicable rules.</li>
            <li>Admission to Grades IX and X is subject to applicable CBSE requirements.</li>
            <li>Parents must complete all formalities within the stipulated time.</li>
        </ul>

        <!-- Verified Contacts Box -->
        <div class="contact-box">
            <div>
                <strong>Admission Counsellor:</strong> {{ $counsellorName }}<br>
                <strong>Direct Contact:</strong> {{ $counsellorPhone }}<br>
                <strong>WhatsApp Enquiry:</strong> 9689898973
            </div>
            <div>
                <strong>Official School Lines:</strong> {{ $schoolPhone1 }} / {{ $schoolPhone2 }}<br>
                <strong>Campus:</strong> {{ $campusAddress }}<br>
                <strong>Online Portal:</strong> {{ route('online-registration') }}
            </div>
        </div>

        <div class="sheet-footer">
            <span>Advaita School of Excellence, Parbhani &copy; {{ date('Y') }}</span>
            <span>Document Ref: ADV-GUIDELINES-{{ $academicYear ?? '2026-27' }}</span>
        </div>
    </div>

</body>
</html>
