@extends('layouts.app')

@section('content')
<div class="container col">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ ('Здравствуйте, '). (Auth::user()->name) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Для продолжения работы с сайтом пройдите небольшой опрос') }}

                    {{-- survey section start --}}
                    
                    <div class="row col-5">
                        <h4 class="fw-bold text-center"></h4>
                        <form class="bg-white px-4" method="POST" action="save">
                            @csrf
                            <p class="fw-bold">Вопрос 1. Вы льготник?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ussr_hero" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Герой СССР
                                </label>
                            </div>
                          
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="wwt_veteran" id="flexCheckDefault2" />
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Ветеран Великой Отечественной войны
                                </label>
                            </div>
                          
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="orphan" id="flexCheckDefault3" />
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Сирота
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="invalid_kid_parent" id="flexCheckDefault3" />
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Родитель ребенка инвалида
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="mother_hero" id="flexCheckDefault3" />
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Мать героиня(многодетная мать)
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="with_tax_objects" id="flexCheckDefault3" />
                                <label class="form-check-label" for="flexCheckDefault3">
                                    ИП с объектами налогообложения
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ind_who_rent_room" id="flexCheckDefault3" />
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Физ.лица которые снимают комнату
                                </label>
                            </div><br>

                            <p class="fw-bold">Вопрос 2. Пробег авто?</p>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="50000" aria-label="actual_mileage" required>
                                <span class="input-group-text">км</span>
                            </div>

                            <p class="fw-bold">Вопрос 3. Сколько дней в среднем работаете в месяц?</p>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="22" aria-label="work_days" required>
                            </div>

                            <p class="fw-bold">Вопрос 4. Сколько бензина в среднем тратите в день?</p>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="10" aria-label="petrol_per_day" required>
                                <span class="input-group-text">л</span>
                            </div>

                            <p class="fw-bold">Вопрос 5. Цена вашей машины(цена за которую покупали) без учета инфляции?</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₸</span>
                                <input type="number" class="form-control" placeholder="5500000" aria-label="primary_cost" required>
                            </div>

                            <p class="fw-bold">Вопрос 6. Сколько денег в месяц получаете после оплаты комиссии InDriver?</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₸</span>
                                <input type="number" class="form-control" placeholder="250000" aria-label="average_monthly_income" required>
                            </div>

                            <p class="fw-bold">Вопрос 7. Какая у Вас финансовая цель?</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₸</span>
                                <input type="number" class="form-control" placeholder="5000000" aria-label="fin_goal" required>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary" value="send">Отправить</button>
                            </div>
                        </form>
                    </div>

                    {{-- survey section end --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
