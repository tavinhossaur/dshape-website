@extends('layouts/main')

@section('container')

@endsection
<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white text-center">
                    <h2>Cadastrar</h2>
                </div>
                <div class="card-body">
                    <div class="container px-3 my-3">
                        {{-- Se o measurement conter valor (já existe) então ele apenas editará o form --}}
                        @if (@isset($measurement))
                            <form action="/measurements/{{$measurement->id}}" method="POST">
                                @method('PUT')
                        {{-- Se o measurement não conter valor (não existe) então o form será criado --}}
                        @else
                            <form action="/measurements/new" method="POST">
                        @endif
                        @csrf
                            {{-- Data --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->date ?? null}}" name="date" class="form-control" id="date" type="date" placeholder="Data da medição" data-sb-validations="required" />
                                <label for="date">Data da medição</label>
                                <div class="invalid-feedback" data-sb-feedback="date:required">A data da medição é obrigatória.</div>
                            </div>

                            {{-- Peso --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->weight ?? null}}" name="weight" class="form-control" id="weight" type="text" placeholder="Peso (kg)" data-sb-validations="required" />
                                <label for="weight">Peso (kg)</label>
                                <div class="invalid-feedback" data-sb-feedback="weight:required">O campo "peso" é obrigatório.</div>
                            </div>

                            {{-- Altura --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->height ?? null}}" name="height" class="form-control" id="height" type="text" placeholder="Altura (cm)" data-sb-validations="required" />
                                <label for="height">Altura (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="height:required">O campo "altura" é obrigatório</div>
                            </div>

                            {{-- Peitoral --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->chest ?? null}}" name="chest" class="form-control" id="chest" type="text" placeholder="Peitoral (cm)" data-sb-validations="required" />
                                <label for="chest">Peitoral (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="chest:required">O campo "peitoral" é obrigatório</div>
                            </div>

                            {{-- Braço Esquerdo --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->left_arm ?? null}}" name="left_arm" class="form-control" id="left_arm" type="text" placeholder="Braço esquerdo (cm)" data-sb-validations="required" />
                                <label for="left_arm">Braço esquerdo (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="left_arm:required">O campo "braço esquerdo" é obrigatório</div>
                            </div>

                            {{-- Braço Direito --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->right_arm ?? null}}" name="right_arm" class="form-control" id="right_arm" type="text" placeholder="Braço direito (cm)" data-sb-validations="required" />
                                <label for="right_arm">Braço direito (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="right_arm:required">O campo "braço direito" é obrigatório</div>
                            </div>

                            {{-- Abdomen --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->abdomen ?? null}}" name="abdomen" class="form-control" id="abdomen" type="text" placeholder="Abdômen (cm)" data-sb-validations="required" />
                                <label for="abdomen">Abdômen (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="abdomen:required">O campo "abdômen" é obrigatório</div>
                            </div>

                            {{-- Cintura --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->waist ?? null}}" name="waist" class="form-control" id="waist" type="text" placeholder="Cintura (cm)" data-sb-validations="required" />
                                <label for="waist">Cintura (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="waist:required">O campo "cintura" é obrigatório</div>
                            </div>

                            {{-- Quadril --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->hips ?? null}}" name="hips" class="form-control" id="hips" type="text" placeholder="Quadril (cm)" data-sb-validations="required" />
                                <label for="hips">Quadril (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="hips:required">O campo "quadril" é obrigatório</div>
                            </div>

                            {{-- Coxa Esquerda --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->left_thigh ?? null}}" name="left_thigh" class="form-control" id="left_thigh" type="text" placeholder="Coxa esquerda (cm)" data-sb-validations="required" />
                                <label for="left_thigh">Coxa esquerda (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="left_thigh:required">O campo "coxa esquerda" é obrigatório</div>
                            </div>

                            {{-- Coxa Direita --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->right_thigh ?? null}}" name="right_thigh" class="form-control" id="right_thigh" type="text" placeholder="Coxa Direita(cm)" data-sb-validations="required" />
                                <label for="right_thigh">Coxa direita (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="right_thigh:required">O campo "coxa direita" é obrigatório</div>
                            </div>

                            {{-- Panturrilha Esquerda --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->left_calf ?? null}}" name="left_calf" class="form-control" id="left_calf" type="text" placeholder="Panturrilha Esquerda(cm)" data-sb-validations="required" />
                                <label for="left_calf">Panturrilha esquerda (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="left_calf:required">O campo "panturrilha esquerda" é obrigatório</div>
                            </div>

                            {{-- Panturrilha Direita --}}
                            <div class="form-floating mb-3">
                                <input value="{{$measurement->right_calf ?? null}}" name="right_calf" class="form-control" id="right_calf" type="text" placeholder="Panturrilha Direita(cm)" data-sb-validations="required" />
                                <label for="right_calf">Panturrilha direita (cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="right_calf:required">O campo "panturrilha direita" é obrigatório</div>
                            </div>

                            <div class="d-flex">
                                <button class="btn btn-primary btn-lg flex-fill me-1" id="submitButton" type="submit">Enviar</button>
                                <button class="btn btn-secondary btn-lg flex-fill ms-1" id="reset">Limpar</button> 
                            </div>
                        </form>
                    </div>

                </div>
            </div> <!--fim do  -->
        </div> <!--fim da coluna -->
    </div> <!--fim do row -->
</div> <!--fim do cotainer -->
