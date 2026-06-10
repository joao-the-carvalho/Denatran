<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>

                    <form method="POST" action="/registrar_oc">
                        @csrf

                        <!-- Lugar -->
                        <label class="floating-label mb-6">
                            <input type="text"
                                   name="lugar"
                                   placeholder="Rua dos Bobos, N°0"
                                   value="{{ old('lugar') }}"
                                   class="input input-bordered @error('lugar') input-error @enderror"
                                   required>
                            <span>Lugar</span>
                        </label>
                        @error('name')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Nivel do Transito -->
                        <label class="floating-label mb-6">
                        <select
                            id="nivel"
                            name="nivel"
                            class="select select-bordered w-full"
                        >
                            <option disabled selected>Selecione</option>
                            <option value="leve">Leve</option>
                            <option value="medio">Médio</option>
                            <option value="grave">Grave</option>
                            <option value="muito_grave">Muito Grave</option>
                        </select>

                        <span>Magnitude</span>
                    </label>
                        @error('nivel')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Motivo -->
                        <label class="floating-label mb-6">
                            <input type="text"
                                   name="motivo"
                                   placeholder="Ex: Acidente, obras, etc."
                                   value="{{ old('motivo') }}"
                                   class="input input-bordered @error('motivo') input-error @enderror"
                                   required>
                            <span>Motivo</span>
                        </label>
                        @error('motivo')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                        <!-- Submit Button -->
                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-primary btn-sm w-full">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>