<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 41,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 42,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 43,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 44,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 45,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 46,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 47,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 48,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 49,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 50,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 51,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 52,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 53,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 54,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 55,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 56,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 57,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 58,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 59,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 60,
                'title' => 'asset_create',
            ],
            [
                'id'    => 61,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 62,
                'title' => 'asset_show',
            ],
            [
                'id'    => 63,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 64,
                'title' => 'asset_access',
            ],
            [
                'id'    => 65,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 66,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 67,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 68,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 69,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 70,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 71,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 72,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 73,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 74,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 75,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 76,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 77,
                'title' => 'task_create',
            ],
            [
                'id'    => 78,
                'title' => 'task_edit',
            ],
            [
                'id'    => 79,
                'title' => 'task_show',
            ],
            [
                'id'    => 80,
                'title' => 'task_delete',
            ],
            [
                'id'    => 81,
                'title' => 'task_access',
            ],
            [
                'id'    => 82,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 83,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 84,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 85,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 86,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 87,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 88,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 89,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 90,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 91,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 92,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 93,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 94,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 95,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 96,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 97,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 98,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 99,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 100,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 101,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 102,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 103,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 104,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 105,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 106,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 107,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 108,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 109,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 110,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 111,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 112,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 113,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 114,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 115,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 116,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 117,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 118,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 119,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 120,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 121,
                'title' => 'currency_create',
            ],
            [
                'id'    => 122,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 123,
                'title' => 'currency_show',
            ],
            [
                'id'    => 124,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 125,
                'title' => 'currency_access',
            ],
            [
                'id'    => 126,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 127,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 128,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 129,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 130,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 131,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 132,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 133,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 134,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 135,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 136,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 137,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 138,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 139,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 140,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 141,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 142,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 143,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 144,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 145,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 146,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 147,
                'title' => 'client_create',
            ],
            [
                'id'    => 148,
                'title' => 'client_edit',
            ],
            [
                'id'    => 149,
                'title' => 'client_show',
            ],
            [
                'id'    => 150,
                'title' => 'client_delete',
            ],
            [
                'id'    => 151,
                'title' => 'client_access',
            ],
            [
                'id'    => 152,
                'title' => 'project_create',
            ],
            [
                'id'    => 153,
                'title' => 'project_edit',
            ],
            [
                'id'    => 154,
                'title' => 'project_show',
            ],
            [
                'id'    => 155,
                'title' => 'project_delete',
            ],
            [
                'id'    => 156,
                'title' => 'project_access',
            ],
            [
                'id'    => 157,
                'title' => 'note_create',
            ],
            [
                'id'    => 158,
                'title' => 'note_edit',
            ],
            [
                'id'    => 159,
                'title' => 'note_show',
            ],
            [
                'id'    => 160,
                'title' => 'note_delete',
            ],
            [
                'id'    => 161,
                'title' => 'note_access',
            ],
            [
                'id'    => 162,
                'title' => 'document_create',
            ],
            [
                'id'    => 163,
                'title' => 'document_edit',
            ],
            [
                'id'    => 164,
                'title' => 'document_show',
            ],
            [
                'id'    => 165,
                'title' => 'document_delete',
            ],
            [
                'id'    => 166,
                'title' => 'document_access',
            ],
            [
                'id'    => 167,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 168,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 169,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 170,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 171,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 172,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 173,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 174,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 175,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 176,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 177,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 178,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 179,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 180,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 181,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 182,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 183,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 184,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 185,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 186,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 187,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 188,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 189,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 190,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 191,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 192,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 193,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 194,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 195,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 196,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 197,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 198,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 199,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 200,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 201,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 202,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 203,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 204,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 205,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 206,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 207,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 208,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 209,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 210,
                'title' => 'expense_create',
            ],
            [
                'id'    => 211,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 212,
                'title' => 'expense_show',
            ],
            [
                'id'    => 213,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 214,
                'title' => 'expense_access',
            ],
            [
                'id'    => 215,
                'title' => 'income_create',
            ],
            [
                'id'    => 216,
                'title' => 'income_edit',
            ],
            [
                'id'    => 217,
                'title' => 'income_show',
            ],
            [
                'id'    => 218,
                'title' => 'income_delete',
            ],
            [
                'id'    => 219,
                'title' => 'income_access',
            ],
            [
                'id'    => 220,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 221,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 222,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 223,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 224,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 225,
                'title' => 'team_create',
            ],
            [
                'id'    => 226,
                'title' => 'team_edit',
            ],
            [
                'id'    => 227,
                'title' => 'team_show',
            ],
            [
                'id'    => 228,
                'title' => 'team_delete',
            ],
            [
                'id'    => 229,
                'title' => 'team_access',
            ],
            [
                'id'    => 230,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
