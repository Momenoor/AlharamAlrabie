<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chart = [
            'Assets' => [
                'Current Assets' => [
                    'Cash on Hand',
                    'Cash in Bank'=>[
                        'Emirates Islamic',
                        'ADCB',
                    ],
                    'Petty Cash',
                    'Accounts Receivable',
                    'Inventory' => [
                        'Food Material',
                        'Beverages',
                        'Supplies',
                    ],
                    'Prepaid Expenses' => [
                        'Rent',
                        'Insurance',
                        'Other Prepaids',
                    ],
                ],
                'Fixed Assets' => [
                    'Furniture and Fixtures',
                    'Kitchen Equipment',
                    'POS System',
                    'Vehicles',
                    'Leasehold Improvements',
                ],
                'Intangible Assets' => [
                    'Goodwill',
                    'Licenses and Permits',
                ],
                'Other Assets' => [
                    'Security Deposits',
                    'Investments',
                ],
            ],
            'Liabilities' => [
                'Current Liabilities' => [
                    'Accounts Payable',
                    'Accrued Expenses',
                    'Short-Term Loans Payable',
                ],
                'Long-Term Liabilities' => [
                    'Loans Payable',
                ],
            ],
            'Equity' => [
                'Owner\'s Equity' => [
                    'Mohamed Attia',
                    'Mohamed Reda',
                    'Mohamed Ibrahim',
                    'Momen Noor',
                    'Samir Emad',
                ],
                'Retained Earnings',
                'Current Accounts' =>[
                    'CA - Mohamed Attia',
                    'CA - Mohamed Reda',
                    'CA - Mohamed Ibrahim',
                    'CA - Momen Noor',
                    'CA - Samir Emad',
                ]
            ],
            'Income' => [
                'Food Sales',
                'Beverage Sales',
                'Other Sales',
                'Interest Income',
                'Miscellaneous Income',
            ],
            'Cost of Goods Sold (COGS)' => [
                'Food Material Cost',
                'Beverage Cost',
                'Other COGS',
            ],
            'Operating Expenses' => [
                'Rent',
                'Utilities',
                'Salaries and Wages',
                'Employee Benefits',
                'Supplies',
                'Marketing and Advertising',
                'Repairs and Maintenance',
                'Insurance',
                'Depreciation',
                'Government Fees',
                'Professional Fees',
            ],
            'Other Expenses' => [
                'Credit Card Fees',
                'Interest Expense',
                'Miscellaneous Expense',
            ],
            'Tax' => [
                'Value Added Tax Payable',
                'Income Tax Payable',
            ],
        ];

       $this->createAccounts($chart);

    }

    private function createAccounts($chart , $parentAccount = null): void
    {
        foreach ($chart as $categoryName => $subcategories) {
            if (is_array($subcategories)) {
                $categoryAccount = Account::create([
                    'name' => $categoryName,
                    'parent_id' => $parentAccount ? $parentAccount->id : null,
                ]);

                $this->createAccounts($subcategories, $categoryAccount);
            } else {
                Account::create([
                    'name' => $subcategories,
                    'parent_id' => $parentAccount->id,
                ]);
            }
        }
    }
}
