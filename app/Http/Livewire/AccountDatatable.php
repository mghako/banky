<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;
use Livewire\WithPagination;

class AccountDatatable extends Component
{
    use WithPagination;

    public $is_active = true;
    public $search_keywords;
    public $sortField;
    public $sortAsc = true;
    protected $queryString = ['search_keywords', 'is_active', 'sortAsc'];

    public function sortBy($field) {
        if($this->sortField == $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function clearSearchKeywords() {
        $this->search_keywords = '';
        $this->sortField = '';
        $this->sortAsc = true;
    }

    public function updatingSearchKeywords()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.account-datatable', [
            'accounts' => Account::
                where('account_number', 'like', '%'.$this->search_keywords.'%')
                ->whereActive($this->is_active)
                ->when($this->sortField, function($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc':'desc');

                })
                ->paginate(2)
        ]);
    }
}
