@extends('layouts.app')

@section('title'){{ $title }}@endsection

@section('page')
    <div class="uk-width-1-1 uk-margin-top">
        <div class="uk-container uk-container-center">
            <div class="uk-flex uk-flex-space-between">
                <div>
                    @if(count($executors))
                        <button data-uk-toggle="{target:'#approve', animation:'uk-animation-slide-right, uk-animation-slide-right'}" class="uk-button uk-button-primary" data-uk-modal>Отправить на поручение</button>
                    @endif
                    @if($income_task && $income_task->status == 0 && !$outcome_task)
                        <form action="{{ route('page.expertise.task.set') }}" class="uk-display-inline" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="expertise_task_id" value="{{ $income_task->id }}">
                            <button type="submit" class="uk-button uk-button-success">Принять</button>
                        </form>
                    @endif
                </div>
                <div>
                    <a href="{{ route('page.expertise.list') }}" class="uk-button uk-button-primary">К списку экспертиз</a>
                </div>
            </div>

            @if(count($executors))
                <form id="approve" action="{{ route('page.expertise.task.store') }}" class="uk-form uk-margin-top uk-hidden" method="post">
                    {{ csrf_field() }}
                    @if($task_parent)
                        <input type="hidden" name="parent_id" value="{{ $task_parent }}">
                    @endif
                    <input type="hidden" name="expertise_id" value="{{ $item->id }}">
                    @foreach($executors as $executor)
                        <div class="uk-form-row">
                            <label class="uk-flex uk-flex-middle">
                                <span class="uk-margin-small-right"><input type="checkbox" name="execute[{{ $executor['leader']->id }}][executor]" value="{{ $executor['leader']->id }}"></span>
                                <span>{{ $executor['leader']->last_name }} {{ $executor['leader']->first_name }} {{ $executor['leader']->middle_name }}</span>
                            </label>
                            @foreach($executor['specialities'] as $speciality)
                                <div class="uk-margin-left uk-margin-small-top">
                                    <label class="uk-flex uk-flex-middle">
                                        <span class="uk-margin-small-right"><input type="checkbox" name="execute[{{ $executor['leader']->id }}][specialities][]" value="{{ $speciality->id }}" class="speciality-checkbox" data-speciality="{{ $speciality->id }}"></span>
                                        <span>{{ $speciality->code .' - '. $speciality->name }}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <hr>
                    <div class="uk-form-row uk-text-right">
                        <button class="uk-button uk-button-success">Поручить</button>
                    </div>
                </form>
            @endif

            <div class="uk-form uk-margin-top uk-margin-large-bottom">
                <span class="uk-flex uk-flex-space-between uk-flex-middle uk-h3">
                    <span>{{ $title }}</span>
                    <span class="uk-h5">Дата создания: {{ $item->created_at }}</span>
                </span>
                <hr>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Делопроизводитель</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->author()->last_name }} {{ $item->author()->first_name }} {{ $item->author()->middle_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Фабула</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->info }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Приложения</p>
                        </div>
                        <div class="uk-width-4-6">
                            @if(count($item->fileList))
                                @foreach($item->fileList as $file)
                                    <a href="{{ route('page.file.download', ['file' => $file->id]) }}" target="_blank">{{ $file->name }}</a>
                                @endforeach
                            @else
                                <p>Нет вложенных файлов</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Категория дела:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->category()->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">№ дела:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->case_number }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">№ статьи:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->article_number }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Статус:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->status()->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Дополнительный статус:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->addition_status()->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Шифр экспертизы:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <ul class="uk-list">
                                @foreach($item->specialities as $speciality)
                                    <li><span>{{ $speciality->code .' - '. $speciality->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Регион назначивший экспертизу:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->region()->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Наименование органа:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->agency()->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">Орган назначивший экспертизу:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->organ()->name }}</p>
                        </div>
                    </div>
                </div>

                @if($item->expertise_organ_name)
                    <div class="uk-margin-top">
                        <div class="uk-grid">
                            <div class="uk-width-2-6">
                                <p class="uk-text-bold">Введите название органа:</p>
                            </div>
                            <div class="uk-width-4-6">
                                <p>{{ $item->expertise_organ_name }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <hr>

                <div class="">
                    <span class="uk-h4">Данные лица назначевшего экспертизу</span>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-grid">
                        <div class="uk-width-2-6">
                            <p class="uk-text-bold">ФИО:</p>
                        </div>
                        <div class="uk-width-4-6">
                            <p>{{ $item->expertise_user_fullname }}</p>
                        </div>
                    </div>
                </div>


                @if($item->expertise_user_position)
                    <div class="uk-margin-top">
                        <div class="uk-grid">
                            <div class="uk-width-2-6">
                                <p class="uk-text-bold">Должность:</p>
                            </div>
                            <div class="uk-width-4-6">
                                <p>{{ $item->expertise_user_position }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if($item->expertise_user_rank)
                    <div class="uk-margin-top">
                        <div class="uk-grid">
                            <div class="uk-width-2-6">
                                <p class="uk-text-bold">Звание:</p>
                            </div>
                            <div class="uk-width-4-6">
                                <p>{{ $item->expertise_user_rank }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if($item->status != 0)
                    <div class="uk-margin-top">
                        <div class="uk-grid">
                            <div class="uk-width-2-6">
                                <p class="uk-text-bold">Статус</p>
                            </div>
                            <div class="uk-width-4-6">
                                <p class="fw-flex fw-flex-middle">
                                    @if($item->status == 2)
                                        <span class="status success uk-margin-small-right"></span>
                                        <span>Завершен</span>
                                    @elseif($item->status == 1)
                                        <span class="status warning uk-margin-small-right"></span>
                                        <span>В процесе</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection