<?php

namespace App\Http\Livewire;

use App\Models\MyWork;
use App\Models\MyWorkCategory;
use Livewire\Component;

class FilterTabs extends Component
{

    public $activeTab = 'all';
    public $search = 'all';

    public function render()
    {
        // Perform data filtering based on the active tab
        $categories =MyWorkCategory::query()->get();


        $items = MyWork::query();



        if ($this->search != 'all') {

            $items->where('my_work_category_id', $this->search);
        }

        $my_works = $items->get();


        // ->latest()

        // ->with('category')
        // ->paginate(10);


        // if ($this->activeTab !== 'all') {
        //     $items->where('category', $this->activeTab);
        // }

        // $filteredItems = $items->get();

        return view('livewire.filter-tabs', compact('categories','my_works'));
    }

    public function filterTab($search){
        $this->search=$search;

   }


}
