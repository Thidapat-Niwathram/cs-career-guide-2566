<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function fetchData()
    {
        return YourModel::all();
    }
    public function getAnswer(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมาจากฟอร์ม
        $validatedData = $request->validate([
            'row-1' => 'required|integer|between:1,3',
            'row-2' => 'required|integer|between:1,3',
            'row-3' => 'required|integer|between:1,3',
            'row-4' => 'required|integer|between:1,3',
            'row-5' => 'required|integer|between:1,3',
            'row-6' => 'required|integer|between:1,3',
            'row-7' => 'required|integer|between:1,3',
            'row-8' => 'required|integer|between:1,3',
            'row-9' => 'required|integer|between:1,3',
            'row-10' => 'required|integer|between:1,3',
            'row-11' => 'required|integer|between:1,3',
            'row-12' => 'required|integer|between:1,3',
            'row-13' => 'required|integer|between:1,3',
            'row-14' => 'required|integer|between:1,3',
            'row-15' => 'required|integer|between:1,3',
            'row-16' => 'required|integer|between:1,3',
            'row-17' => 'required|integer|between:1,3',
            'row-18' => 'required|integer|between:1,3',
            'row-19' => 'required|integer|between:1,3',
            'row-20' => 'required|integer|between:1,3',
            'row-21' => 'required|integer|between:1,3',
            'row-22' => 'required|integer|between:1,3',
            'row-23' => 'required|integer|between:1,3',
            'row-24' => 'required|integer|between:1,3',
            'row-25' => 'required|integer|between:1,3',
            'row-26' => 'required|integer|between:1,3',
            'row-27' => 'required|integer|between:1,3',
            'row-28' => 'required|integer|between:1,3',
            'row-29' => 'required|integer|between:1,3',
            'row-30' => 'required|integer|between:1,3',
            'row-31' => 'required|integer|between:1,3',
            'row-32' => 'required|integer|between:1,3',
            'row-33' => 'required|integer|between:1,3',
            'row-34' => 'required|integer|between:1,3',
            'row-35' => 'required|integer|between:1,3'
        ]);
        // ประมวลผลข้อมูลที่ส่งมาจากฟอร์ม
        $means = $this->processFormData($request);
        // ดึงข้อมูลจากฐานข้อมูล
        $yourModels = $this->fetchData();
        // ค้นหาข้อมูลที่ตรงกับเกณฑ์ที่กำหนด
        $matchingData = $this->findMatchingData($means, $yourModels);
        // นับจำนวนครั้งที่ข้อมูลปรากฏ
        $countedData = $this->countDataOccurrences($matchingData);
        // หาข้อมูลที่ปรากฏมากที่สุด
        $mostFrequentData = $this->findMostFrequentData($countedData);
    }
    // ประมวลผลข้อมูลที่ส่งมาจากฟอร์ม
    // ประมวลผลข้อมูลที่ส่งมาจากฟอร์ม
    private function processFormData(Request $request)
    {
        $softsk1 = 0;
        $softsk2 = 0;
        $softsk3 = 0;
        $softsk4 = 0;
        $softsk5 = 0;
        $softsk6 = 0;
        $softsk7 = 0;

        foreach ($request->all() as $key => $value) {
            switch (true) {
                case strpos($key, 'row-') === 0 && (int)substr($key, 4) >= 1 && (int)substr($key, 4) <= 5:
                    $softsk1 += $value;
                    break;
                case strpos($key, 'row-') === 0 && (int)substr($key, 4) >= 6 && (int)substr($key, 4) <= 10:
                    $softsk2 += $value;
                    break;
                case strpos($key, 'row-') === 0 && (int)substr($key, 4) >= 11 && (int)substr($key, 4) <= 15:
                    $softsk3 += $value;
                    break;
                case strpos($key, 'row-') === 0 && (int)substr($key, 4) >= 16 && (int)substr($key, 4) <= 20:
                    $softsk4 += $value;
                    break;
                case strpos($key, 'row-') === 0 && (int)substr($key, 4) >= 21 && (int)substr($key, 4) <= 25:
                    $softsk5 += $value;
                    break;
                case strpos($key, 'row-') === 0 && (int)substr($key, 4) >= 26 && (int)substr($key, 4) <= 30:
                    $softsk6 += $value;
                    break;
                case strpos($key, 'row-') === 0 && (int)substr($key, 4) >= 31 && (int)substr($key, 4) <= 35:
                    $softsk7 += $value;
                    break;
                default:
                    // กรณีที่ไม่ตรงกับเงื่อนไขที่ระบุ ไม่ต้องทำอะไร
                    break;
            }
        }

        $means1 = $softsk1 /= 5;
        $means2 = $softsk2 /= 5;
        $means3 = $softsk3 /= 5;
        $means4 = $softsk4 /= 5;
        $means5 = $softsk5 /= 5;
        $means6 = $softsk6 /= 5;
        $means7 = $softsk7 /= 5;

        // สร้างอาร์เรย์ของค่าเฉลี่ยและส่งกลับออกไป
        return [
            'means1' => $means1,
            'means2' => $means2,
            'means3' => $means3,
            'means4' => $means4,
            'means5' => $means5,
            'means6' => $means6,
            'means7' => $means7,
        ];
    }


    // ค้นหาข้อมูลที่ตรงกับเกณฑ์ที่กำหนด
    private function findMatchingData($means, $yourModels)
    {
        $matchingData = [];

        foreach ($yourModels as $yourModel) {
            if ($means['means1'] == $yourModel->sk1 || $means['means2'] == $yourModel->sk2 ||
                $means['means3'] == $yourModel->sk3 || $means['means4'] == $yourModel->sk4 ||
                $means['means5'] == $yourModel->sk5 || $means['means6'] == $yourModel->sk6 || $means['means7'] == $yourModel->sk7) {
                $matchingData[] = $yourModel;
            }
        }

        return $matchingData;
    }
    // หาข้อมูลที่ปรากฏมากที่สุด
    private function findMostFrequentData($matchingData)
    {
        $countedData = array_count_values($matchingData);
        $maxOccurrence = max($countedData);
        $mostFrequentData = [];

        foreach ($countedData as $key => $value) {
            if ($value == $maxOccurrence) {
                $mostFrequentData[] = $key;
            }
        }

        return $mostFrequentData;
    }

}
