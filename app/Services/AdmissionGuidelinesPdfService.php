<?php

namespace App\Services;

use App\Models\Setting;

class AdmissionGuidelinesPdfService
{
    /**
     * Generate the official Admission Guidelines PDF binary stream.
     */
    public function generate(): string
    {
        $schoolName = Setting::get('site_school_name', 'Advaita School of Excellence');
        $counsellorName = Setting::get('admission_counsellor_name', 'Ms. Vaishnavi');
        $counsellorPhone = Setting::get('admission_counsellor_phone', '9689898973');
        $schoolPhone1 = Setting::get('admission_school_phone1', '9689898973');
        $schoolPhone2 = Setting::get('admission_school_phone2', '9146066216');
        $campusAddress = Setting::get('school_official_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra - 431401');

        $pages = [];

        // ---------------- PAGE 1 CONTENT STREAM ----------------
        $p1 = [];
        // Top Header Banner (Navy #083B7A -> 0.031, 0.231, 0.478)
        $p1[] = '0.031 0.231 0.478 rg';
        $p1[] = '36 750 523 54 re f';
        // Accent Gold Strip (Orange #F37021 -> 0.953, 0.439, 0.129)
        $p1[] = '0.953 0.439 0.129 rg';
        $p1[] = '36 745 523 5 re f';

        // Header Text
        $p1[] = 'BT /F2 16 Tf 1 1 1 rg 48 780 Td ('.$this->escape(strtoupper($schoolName).', PARBHANI').') Tj ET';
        $p1[] = 'BT /F1 9 Tf 0.9 0.9 0.9 rg 48 763 Td (CBSE Affiliated Senior Secondary School | Affiliation No. 1130920 | Applicable Classes: Pre-Primary to Grade X) Tj ET';

        // Document Title Box
        $p1[] = '0.96 0.97 0.98 rg 36 705 523 32 re f';
        $p1[] = '0.85 0.88 0.92 RG 1 w 36 705 523 32 re s';
        $p1[] = 'BT /F2 12 Tf 0.031 0.231 0.478 rg 48 718 Td (ADMISSION GUIDELINES & ELIGIBILITY PROTOCOL - ACADEMIC SESSION 2026-27) Tj ET';

        // SECTION A: AGE CRITERIA
        $p1[] = 'BT /F2 11 Tf 0.953 0.439 0.129 rg 36 685 Td (SECTION A: AGE CRITERIA & PHASED IMPLEMENTATION) Tj ET';
        $p1[] = '0.953 0.439 0.129 RG 1.5 w 36 680 m 559 680 l S';

        // Table Header
        $p1[] = '0.031 0.231 0.478 rg 36 658 523 18 re f';
        $p1[] = 'BT /F2 9 Tf 1 1 1 rg 44 663 Td (Class / Grade) Tj ET';
        $p1[] = 'BT /F2 9 Tf 1 1 1 rg 180 663 Td (Minimum Age / Eligibility Criteria (Cut-off Date: 30 June)) Tj ET';

        // Table Rows
        $ageRows = [
            ['Nursery', 'Minimum 3 years (Phased Implementation: Academic Year 2027-28)'],
            ['Junior KG', 'Minimum 4 years (Phased Implementation: Academic Year 2028-29)'],
            ['Senior KG', 'Minimum 5 years (Phased Implementation: Academic Year 2029-30)'],
            ['Grade I', 'Minimum 6 years (Phased Implementation: Academic Year 2030-31)'],
            ['Grades II-VIII', 'As per applicable Maharashtra Government rules and previous class completion'],
            ['Grades IX-X', 'As per applicable CBSE admission rules and eligibility requirements'],
        ];

        $y = 658;
        foreach ($ageRows as $idx => $row) {
            $h = 16;
            $bg = ($idx % 2 === 0) ? '0.98 0.98 0.99' : '1 1 1';
            $p1[] = "{$bg} rg 36 ".($y - $h)." 523 {$h} re f";
            $p1[] = '0.88 0.90 0.93 RG 0.5 w 36 '.($y - $h)." 523 {$h} re s";
            $p1[] = 'BT /F2 8.5 Tf 0.08 0.15 0.25 rg 44 '.($y - 12).' Td ('.$this->escape($row[0]).') Tj ET';
            $p1[] = 'BT /F1 8 Tf 0.20 0.25 0.30 rg 180 '.($y - 12).' Td ('.$this->escape($row[1]).') Tj ET';
            $y -= $h;
        }

        // Phased Schedule Callout Box
        $y -= 6;
        $p1[] = '0.99 0.96 0.93 rg 36 '.($y - 42).' 523 42 re f';
        $p1[] = '0.953 0.439 0.129 RG 1 w 36 '.($y - 42).' 523 42 re s';
        $p1[] = 'BT /F2 8.5 Tf 0.953 0.439 0.129 rg 44 '.($y - 13).' Td (Phased Implementation Schedule & Cut-off Notice:) Tj ET';
        $p1[] = 'BT /F1 8 Tf 0.25 0.25 0.25 rg 44 '.($y - 25).' Td (Nursery: AY 2027-28 | Junior KG: AY 2028-29 | Senior KG: AY 2029-30 | Grade I: AY 2030-31) Tj ET';
        $p1[] = 'BT /F1 7.5 Tf 0.35 0.35 0.35 rg 44 '.($y - 36).' Td (*Prescribed age cut-off date is 30 June. Criteria and phased rollout are subject to Maharashtra Govt rules and school policy.) Tj ET';

        // SECTION B: DOCUMENTS REQUIRED
        $y -= 54;
        $p1[] = 'BT /F2 11 Tf 0.953 0.439 0.129 rg 36 '.$y.' Td (SECTION B: DOCUMENTS REQUIRED CHECKLIST) Tj ET';
        $p1[] = '0.953 0.439 0.129 RG 1.5 w 36 '.($y - 5).' m 559 '.($y - 5).' l S';

        $y -= 10;
        $docs = [
            '1. Birth Certificate (Photocopy verified against original / Municipal / Gram Panchayat issued)',
            "2. Student's passport-size photographs (Recent color photographs, minimum 3 copies)",
            '3. Aadhaar details, where applicable (Photocopy of student & parents Aadhaar card)',
            '4. Previous class report card (Marksheet / Comprehensive progress report from recognised school)',
            '5. Transfer Certificate (TC), where applicable (Original TC countersigned by competent authority)',
            "6. Parent's identity and address proof, where required (Aadhaar / Passport / Electricity bill / Ration card)",
            '7. Additional documents, if prescribed by the authorities (Caste certificate / UDISE / Special medical alerts)',
        ];

        foreach ($docs as $doc) {
            $y -= 17;
            $p1[] = '0.95 0.98 0.95 rg 40 '.($y - 2).' 10 10 re f';
            $p1[] = '0.1 0.6 0.2 RG 0.8 w 40 '.($y - 2).' 10 10 re s';
            $p1[] = 'BT /F2 8.5 Tf 0.1 0.6 0.2 rg 42 '.$y.' Td ([x]) Tj ET';
            $p1[] = 'BT /F1 8.5 Tf 0.15 0.2 0.25 rg 56 '.$y.' Td ('.$this->escape($doc).') Tj ET';
        }

        // Footer Page 1
        $p1[] = '0.8 0.8 0.8 RG 0.5 w 36 40 m 559 40 l S';
        $p1[] = 'BT /F1 7.5 Tf 0.5 0.5 0.5 rg 36 28 Td (Advaita School of Excellence, Parbhani | Admission Guidelines AY 2026-27) Tj ET';
        $p1[] = 'BT /F1 7.5 Tf 0.5 0.5 0.5 rg 480 28 Td (Page 1 of 2) Tj ET';

        $pages[] = implode("\n", $p1);

        // ---------------- PAGE 2 CONTENT STREAM ----------------
        $p2 = [];
        // Top Header Slim
        $p2[] = '0.031 0.231 0.478 rg 36 780 523 25 re f';
        $p2[] = '0.953 0.439 0.129 rg 36 777 523 3 re f';
        $p2[] = 'BT /F2 10 Tf 1 1 1 rg 48 789 Td ('.$this->escape(strtoupper($schoolName).' - ADMISSION PROCEDURES & ELIGIBILITY').') Tj ET';

        // SECTION C: ADMISSION PROCEDURE
        $y = 750;
        $p2[] = 'BT /F2 11 Tf 0.953 0.439 0.129 rg 36 '.$y.' Td (SECTION C: ADMISSION PROCEDURE (5-STEP SEQUENCE)) Tj ET';
        $p2[] = '0.953 0.439 0.129 RG 1.5 w 36 '.($y - 5).' m 559 '.($y - 5).' l S';

        $steps = [
            ['Step 1', 'Submit Online Enquiry / Registration', 'Fill out the online enquiry or registration form via the school portal or admissions desk.'],
            ['Step 2', 'Submit Required Documents', 'Provide copies of birth certificate, photos, report cards, and identity proofs for desk verification.'],
            ['Step 3', 'Interaction or Assessment', 'Attend a supportive informal parent-ward interaction or grade-appropriate assessment.'],
            ['Step 4', 'Fee Payment & Formalities', 'Complete admission formalities, opt for term/annual fee payment, and obtain official receipt.'],
            ['Step 5', 'Admission Confirmation', 'Receive confirmation letter with student roll number, section allotment, and school start dates.'],
        ];

        $y -= 8;
        foreach ($steps as $st) {
            $y -= 28;
            $p2[] = '0.94 0.96 0.99 rg 36 '.($y - 4).' 46 22 re f';
            $p2[] = '0.031 0.231 0.478 RG 1 w 36 '.($y - 4).' 46 22 re s';
            $p2[] = 'BT /F2 8.5 Tf 0.031 0.231 0.478 rg 42 '.($y + 3).' Td ('.$this->escape($st[0]).') Tj ET';
            $p2[] = 'BT /F2 8.5 Tf 0.1 0.15 0.2 rg 90 '.($y + 6).' Td ('.$this->escape($st[1]).') Tj ET';
            $p2[] = 'BT /F1 8 Tf 0.3 0.35 0.4 rg 90 '.($y - 4).' Td ('.$this->escape($st[2]).') Tj ET';
        }

        // SECTION D: CLASS ELIGIBILITY
        $y -= 26;
        $p2[] = 'BT /F2 11 Tf 0.953 0.439 0.129 rg 36 '.$y.' Td (SECTION D: CLASS ELIGIBILITY & CBSE REQUIREMENTS) Tj ET';
        $p2[] = '0.953 0.439 0.129 RG 1.5 w 36 '.($y - 5).' m 559 '.($y - 5).' l S';

        $eligibilities = [
            ['Grades II-VIII', 'Successful completion and pass certificate of the previous class from a recognised school, subject to applicable state and CBSE age norms.'],
            ['Grade IX', 'Successful completion of Grade VIII from a recognised school. Candidate must produce valid marksheets and original transfer certificate.'],
            ['Grade X', 'Direct admission to Grade X is strictly NOT permitted except under specific exemptions prescribed by CBSE (e.g., government transfer or interstate relocation).'],
        ];

        $y -= 6;
        foreach ($eligibilities as $el) {
            $y -= 26;
            $p2[] = '0.98 0.98 0.99 rg 36 '.($y - 4).' 523 23 re f';
            $p2[] = '0.85 0.88 0.92 RG 0.5 w 36 '.($y - 4).' 523 23 re s';
            $p2[] = 'BT /F2 8.5 Tf 0.031 0.231 0.478 rg 44 '.($y + 4).' Td ('.$this->escape($el[0]).':) Tj ET';
            $p2[] = 'BT /F1 8 Tf 0.2 0.25 0.3 rg 125 '.($y + 4).' Td ('.$this->escape(substr($el[1], 0, 95)).') Tj ET';
            if (strlen($el[1]) > 95) {
                $p2[] = 'BT /F1 8 Tf 0.2 0.25 0.3 rg 125 '.($y - 5).' Td ('.$this->escape(substr($el[1], 95)).') Tj ET';
            }
        }

        // SECTION E: IMPORTANT INSTRUCTIONS
        $y -= 24;
        $p2[] = 'BT /F2 11 Tf 0.953 0.439 0.129 rg 36 '.$y.' Td (SECTION E: IMPORTANT INSTRUCTIONS & NOTICES) Tj ET';
        $p2[] = '0.953 0.439 0.129 RG 1.5 w 36 '.($y - 5).' m 559 '.($y - 5).' l S';

        $instructions = [
            '1. Authenticity: All information and documents submitted must be strictly accurate, authentic, and verifiable.',
            '2. No Guarantee: Registration does not guarantee admission. Admissions are subject to seat availability and applicable rules.',
            '3. Quotas & Vacancies: All class admissions are strictly governed by sanctioned classroom capacity and student-teacher ratios.',
            '4. CBSE Compliance: Admission to Grades IX and X is subject to mandatory CBSE registration deadlines and eligibility requirements.',
            '5. Timelines: Parents must complete all documentation and fee payment formalities within the stipulated timeframe.',
        ];

        $y -= 6;
        foreach ($instructions as $ins) {
            $y -= 15;
            $p2[] = 'BT /F1 8 Tf 0.2 0.25 0.3 rg 42 '.$y.' Td ('.$this->escape($ins).') Tj ET';
        }

        // Helpline and Quick Contacts Box
        $y -= 18;
        $p2[] = '0.94 0.97 1.0 rg 36 '.($y - 62).' 523 62 re f';
        $p2[] = '0.031 0.231 0.478 RG 1 w 36 '.($y - 62).' 523 62 re s';
        $p2[] = 'BT /F2 9 Tf 0.031 0.231 0.478 rg 48 '.($y - 14).' Td (ADMISSION HELPLINE & VERIFIED OFFICIAL CONTACTS) Tj ET';
        $p2[] = 'BT /F1 8.5 Tf 0.15 0.2 0.25 rg 48 '.($y - 28).' Td (Admission Counsellor: '.$this->escape($counsellorName).' | Direct Phone: '.$this->escape($counsellorPhone).') Tj ET';
        $p2[] = 'BT /F1 8.5 Tf 0.15 0.2 0.25 rg 48 '.($y - 41).' Td (School Phone Lines: '.$this->escape($schoolPhone1).' / '.$this->escape($schoolPhone2).' | WhatsApp Enquiry: 9689898973) Tj ET';
        $p2[] = 'BT /F1 8 Tf 0.35 0.4 0.45 rg 48 '.($y - 54).' Td (Campus: '.$this->escape($campusAddress).') Tj ET';

        // Footer Page 2
        $p2[] = '0.8 0.8 0.8 RG 0.5 w 36 40 m 559 40 l S';
        $p2[] = 'BT /F1 7.5 Tf 0.5 0.5 0.5 rg 36 28 Td (Advaita School of Excellence, Parbhani | Admission Guidelines AY 2026-27) Tj ET';
        $p2[] = 'BT /F1 7.5 Tf 0.5 0.5 0.5 rg 480 28 Td (Page 2 of 2) Tj ET';

        $pages[] = implode("\n", $p2);

        return $this->buildPdfDocument($pages);
    }

    /**
     * Escape special PDF string characters: \ ( )
     */
    protected function escape(string $text): string
    {
        return str_replace(['\\', '(', ')'], ['\\\\', '\\(', '\\)'], $text);
    }

    /**
     * Assemble low-level PDF 1.4 syntax with cross reference table.
     *
     * @param  array<int, string>  $pageStreams
     */
    protected function buildPdfDocument(array $pageStreams): string
    {
        $objects = [];
        // Object IDs:
        // 1: Catalog
        // 2: Pages
        // 3: Font F1 (Helvetica)
        // 4: Font F2 (Helvetica-Bold)
        // 5: Page 1
        // 6: Contents Page 1
        // 7: Page 2
        // 8: Contents Page 2

        $pageCount = count($pageStreams);
        $font1Id = 3;
        $font2Id = 4;

        $pageObjectIds = [];
        $streamObjectIds = [];

        $currentId = 5;
        for ($i = 0; $i < $pageCount; $i++) {
            $pageObjectIds[] = $currentId++;
            $streamObjectIds[] = $currentId++;
        }

        // 1: Catalog
        $objects[1] = '<< /Type /Catalog /Pages 2 0 R >>';

        // 2: Pages
        $kidsStr = implode(' ', array_map(fn ($id) => "{$id} 0 R", $pageObjectIds));
        $objects[2] = "<< /Type /Pages /Kids [{$kidsStr}] /Count {$pageCount} >>";

        // 3: Font F1 (Helvetica)
        $objects[3] = '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica /Encoding /WinAnsiEncoding >>';

        // 4: Font F2 (Helvetica-Bold)
        $objects[4] = '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica-Bold /Encoding /WinAnsiEncoding >>';

        // Pages & Streams
        for ($i = 0; $i < $pageCount; $i++) {
            $pageId = $pageObjectIds[$i];
            $streamId = $streamObjectIds[$i];
            $streamContent = $pageStreams[$i];
            $streamLength = strlen($streamContent);

            $objects[$pageId] = "<< /Type /Page /Parent 2 0 R /MediaBox [0 0 595.28 841.89] /Resources << /Font << /F1 {$font1Id} 0 R /F2 {$font2Id} 0 R >> >> /Contents {$streamId} 0 R >>";
            $objects[$streamId] = "<< /Length {$streamLength} >>\nstream\n{$streamContent}\nendstream";
        }

        // Build binary output
        $out = "%PDF-1.4\n%\xe2\xe3\xcf\xd3\n";
        $xref = [];
        $xref[0] = "0000000000 65535 f \n";

        $maxId = max(array_keys($objects));
        for ($id = 1; $id <= $maxId; $id++) {
            $offset = strlen($out);
            $xref[$id] = sprintf("%010d 00000 n \n", $offset);
            $out .= "{$id} 0 obj\n".$objects[$id]."\nendobj\n";
        }

        $xrefStart = strlen($out);
        $out .= "xref\n0 ".($maxId + 1)."\n";
        for ($id = 0; $id <= $maxId; $id++) {
            $out .= $xref[$id];
        }

        $out .= "trailer\n<< /Size ".($maxId + 1)." /Root 1 0 R >>\n";
        $out .= "startxref\n{$xrefStart}\n%%EOF\n";

        return $out;
    }

    /**
     * Save the generated PDF directly to public/downloads.
     */
    public function saveToPublic(): string
    {
        $dir = public_path('downloads');
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $filePath = $dir.DIRECTORY_SEPARATOR.'admission-guidelines-advaita-school-parbhani.pdf';
        file_put_contents($filePath, $this->generate());

        return $filePath;
    }
}
